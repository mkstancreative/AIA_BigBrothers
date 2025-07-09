// Get CSRF Token
// Optional helper
function getCsrfToken() {
    return (
        document.querySelector('meta[name="csrf-token"]')?.content ||
        document.querySelector('input[name="_token"]')?.value ||
        ""
    );
}

// Function to Create and Update Table
function createAndUpdateTableRow({
    tableSelector,
    rowIdPrefix,
    item,
    columns,
    actionButtonsHtml = "",
    onRowInserted = null,
}) {
    const table = document.querySelector(tableSelector);
    if (!table) return console.error(`Table not found: ${tableSelector}`);

    const tbody = table.querySelector("tbody");
    const rowId = `${rowIdPrefix}${item.id}`;
    const existingRow = document.getElementById(rowId);

    // Build HTML for columns
    const columnsHtml = columns
        .map((key) => `<td>${item[key] ?? ""}</td>`)
        .join("");

    const newRowHtml = `
        <tr id="${rowId}">
            ${columnsHtml}
            <td>${actionButtonsHtml}</td>
        </tr>
    `;

    if (existingRow) {
        existingRow.outerHTML = newRowHtml;
    } else {
        tbody.insertAdjacentHTML("beforeend", newRowHtml);
    }

    if (typeof onRowInserted === "function") {
        onRowInserted(item);
    }
}

// Function to Submit Forms
function handleFormSubmit(
    formSelector,
    url,
    method = "POST",
    successMessage = "Saved successfully!",
    onSuccess = null
) {
    const form = document.querySelector(formSelector);
    if (!form) return console.error(`Form not found: ${formSelector}`);

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        // Optional: disable submit button
        const submitBtn = form.querySelector('[type="submit"]');
        if (submitBtn) submitBtn.disabled = true;

        // Show loading Swal
        Swal.fire({
            title: "Please wait...",
            html: "Submitting your request...",
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });

        fetch(url, {
            method: method.toUpperCase(),
            headers: {
                "X-CSRF-TOKEN": getCsrfToken(),
                Accept: "application/json",
            },
            body: formData,
        })
            .then(async (res) => {
                const contentType = res.headers.get("Content-Type");
                const isJson =
                    contentType && contentType.includes("application/json");
                const data = isJson ? await res.json() : null;

                // Re-enable submit button
                if (submitBtn) submitBtn.disabled = false;

                // Clear previous errors
                form.querySelectorAll(".is-invalid").forEach((el) =>
                    el.classList.remove("is-invalid")
                );
                form.querySelectorAll(".invalid-feedback").forEach((el) =>
                    el.remove()
                );

                if (res.ok) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: successMessage,
                    });

                    form.reset();

                    if (typeof onSuccess === "function") {
                        onSuccess(data?.data);
                    } else {
                        window.location.reload(); // Default reload
                    }
                } else if (res.status === 422 && data?.errors) {
                    // Show validation errors
                    Object.entries(data.errors).forEach(([field, messages]) => {
                        const input = form.querySelector(`[name="${field}"]`);
                        if (input) {
                            input.classList.add("is-invalid");

                            const feedback = document.createElement("div");
                            feedback.className = "invalid-feedback";
                            feedback.innerText = messages[0];
                            input.parentNode.appendChild(feedback);
                        }
                    });

                    Swal.fire({
                        icon: "error",
                        title: "Validation Error",
                        html: Object.values(data.errors).flat().join("<br>"),
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text:
                            data?.message ||
                            "Something went wrong. Please try again.",
                    });
                    console.error("Server error:", data);
                }
            })
            .catch((error) => {
                if (submitBtn) submitBtn.disabled = false;
                Swal.fire({
                    icon: "error",
                    title: "Network Error",
                    text: "Failed to submit form. Check your connection.",
                });
                console.error("Network or fetch error:", error);
            });
    });
}

// Function to Update Records
function handleUpdateFormSubmit(
    formSelector,
    updateUrlBase,
    successMessage = "Update successful!",
    onSuccess = null
) {
    const form = document.querySelector(formSelector);
    if (!form) return console.error(`Form not found: ${formSelector}`);

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const id = form.dataset.id;
        if (!id) {
            Swal.fire({
                icon: "error",
                title: "Missing ID",
                text: "No record ID found for update.",
            });
            return;
        }

        // Clear previous validation errors
        form.querySelectorAll(".is-invalid").forEach((el) =>
            el.classList.remove("is-invalid")
        );
        form.querySelectorAll(".invalid-feedback").forEach((el) => el.remove());

        const formData = new FormData(form);
        formData.append("_method", "PUT");

        const submitBtn = form.querySelector('[type="submit"]');
        if (submitBtn) submitBtn.disabled = true;

        // Show loading alert
        Swal.fire({
            title: "Please wait...",
            html: "Updating your data...",
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });

        fetch(`${updateUrlBase}/${id}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": getCsrfToken(),
                Accept: "application/json",
            },
            body: formData,
        })
            .then(async (res) => {
                const contentType = res.headers.get("Content-Type") || "";
                const isJson = contentType.includes("application/json");
                const data = isJson ? await res.json() : null;

                if (submitBtn) submitBtn.disabled = false;

                if (
                    res.ok &&
                    (data?.status === true || data?.status === "success")
                ) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: successMessage,
                    });

                    if (typeof onSuccess === "function") {
                        onSuccess(data?.data);
                    }
                } else if (res.status === 422 && data?.errors) {
                    Object.entries(data.errors).forEach(([field, messages]) => {
                        const input = form.querySelector(`[name="${field}"]`);
                        if (input) {
                            input.classList.add("is-invalid");

                            const feedback = document.createElement("div");
                            feedback.className = "invalid-feedback";
                            feedback.innerText = messages[0];
                            input
                                .closest(".input-group, .form-group, div")
                                .appendChild(feedback);
                        }
                    });

                    Swal.fire({
                        icon: "error",
                        title: "Validation Error",
                        html: Object.values(data.errors).flat().join("<br>"),
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Update Failed",
                        text: data?.message || "Unexpected error occurred.",
                    });
                    console.error("Unexpected server response:", data);
                }
            })
            .catch((err) => {
                if (submitBtn) submitBtn.disabled = false;
                Swal.fire({
                    icon: "error",
                    title: "Network Error",
                    text: "Something went wrong while submitting the form.",
                });
                console.error("Network or fetch error:", err);
            });
    });
}

// Function to Delete Rows
function handleDeleteButtons(
    containerSelector,
    urlBase,
    rowPrefix,
    successMessage,
    onDeleted = null
) {
    const container = document.querySelector(
        containerSelector === "body" ? "body" : containerSelector
    );

    if (!container) return;

    container.addEventListener("click", function (e) {
        const deleteBtn = e.target.closest(".delete-btn");
        if (!deleteBtn) return;

        const id = deleteBtn.dataset.id;
        if (!id) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Missing ID for deletion.",
            });
            return;
        }

        Swal.fire({
            title: "Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (!result.isConfirmed) return;

            fetch(`${urlBase}/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN":
                        document.querySelector('input[name="_token"]')?.value ||
                        "",
                    Accept: "application/json",
                },
            })
                .then((res) => res.json())
                .then((data) => {
                    Swal.fire("Deleted!", successMessage, "success");
                    const row = document.getElementById(`${rowPrefix}${id}`);
                    if (row) row.remove();

                    if (typeof onDeleted === "function") {
                        onDeleted();
                    }
                })
                .catch((err) => {
                    console.error("Delete failed:", err);
                    Swal.fire("Error!", "Error deleting item.", "error");
                });
        });
    });
}

// Function For No Record Rows
function toggleNoRecordsRow(tableSelector) {
    const table = document.querySelector(tableSelector);
    if (!table) return;

    const tbody = table.querySelector("tbody");
    if (!tbody) return; // ✅ Prevent error if tbody is missing

    const rows = tbody.querySelectorAll("tr");
    const hasDataRows = [...rows].some(
        (row) => row.id && row.id.startsWith("tableRow-") // update this if using "class-row-"
    );

    const noRecordRow = tbody.querySelector("#no-records-row");

    if (hasDataRows) {
        noRecordRow?.remove();
    } else if (!noRecordRow) {
        const noDataRow = document.createElement("tr");
        noDataRow.id = "no-records-row";
        noDataRow.innerHTML = `<td colspan="5" class="text-center text-muted">No records found</td>`;
        tbody.appendChild(noDataRow);
    }
}
