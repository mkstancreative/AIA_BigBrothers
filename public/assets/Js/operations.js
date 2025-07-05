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
    onSuccess = null // <-- optional callback
) {
    const form = document.querySelector(formSelector);
    if (!form) return console.error(`Form not found: ${formSelector}`);

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch(url, {
            method: method.toUpperCase(),
            headers: {
                "X-CSRF-TOKEN": getCsrfToken(),
                Accept: "application/json",
            },
            body: formData,
        }).then(async (res) => {
            const contentType = res.headers.get("Content-Type");
            const isJson =
                contentType && contentType.includes("application/json");
            const data = isJson ? await res.json() : null;

            if (res.ok) {
                toastr.success(successMessage);
                form.reset();
                window.location.reload();

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
                        input.parentNode.appendChild(feedback);
                    }

                    messages.forEach((msg) => toastr.error(msg));
                });
            } else {
                toastr.error(
                    data?.message ||
                        "Something went wrong. Check form and try again."
                );
                console.error("Validation or server error:", data);
            }
        });
    });
}

function capitalizeFirst(str) {
    return str ? str.charAt(0).toUpperCase() + str.slice(1).toLowerCase() : "";
}

function formatCase(str) {
    return str
        ? str
              .toLowerCase()
              .split(" ")
              .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
              .join(" ")
        : "";
}

// Fetch FormData On The Form
function populateFormFields(
    containerSelector,
    fetchUrlBase,
    formSelector,
    inputPrefix = "edit-"
) {
    const container = document.querySelector(containerSelector);
    if (!container) return;

    container.addEventListener("click", function (e) {
        const editBtn = e.target.closest(".edit-btn");
        if (!editBtn) return;

        const id = editBtn.dataset.id;
        if (!id) return;

        console.log(`${fetchUrlBase}/${id}`);

        fetch(`${fetchUrlBase}/${id}`)
            .then((res) => res.json())
            .then((data) => {
                const form = document.querySelector(formSelector);
                if (!form) return;

                form.dataset.id = id;

                for (const key in data) {
                    // Handle checkboxes with array values
                    if (Array.isArray(data[key])) {
                        form.querySelectorAll(`input[name="${key}[]"]`).forEach(
                            (checkbox) => {
                                checkbox.checked = data[key].includes(
                                    checkbox.value
                                );
                            }
                        );
                        continue;
                    }

                    const input = form.querySelector(`#${inputPrefix}${key}`);
                    if (input) {
                        let value = data[key];

                        // Handle select fields properly
                        if (input.tagName === "SELECT") {
                            [...input.options].forEach((opt) => {
                                opt.selected = opt.value === value;
                            });
                        } else if (
                            input.type === "checkbox" ||
                            input.type === "radio"
                        ) {
                            input.checked = input.value == value;
                        } else {
                            input.value = value;
                        }
                    }
                }
            })
            .catch((err) => {
                console.error("Failed to fetch data:", err);
                toastr.error("Could not load form data.");
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
            toastr.error("Missing data ID.");
            return;
        }

        // Clear previous validation errors
        form.querySelectorAll(".is-invalid").forEach((el) =>
            el.classList.remove("is-invalid")
        );
        form.querySelectorAll(".invalid-feedback").forEach((el) => el.remove());

        const formData = new FormData(form);
        formData.append("_method", "PUT");

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

                if (res.ok && data?.status === "success") {
                    toastr.success(successMessage);
                    form.reset();

                    if (typeof onSuccess === "function") {
                        onSuccess(data.data);
                    }
                } else if (res.status === 422 && data?.errors) {
                    // Handle Laravel validation errors
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

                        messages.forEach((msg) => toastr.error(msg));
                    });
                } else {
                    toastr.error(data?.message || "Update failed.");
                    console.error("Unexpected server response:", data);
                }
            })
            .catch((err) => {
                console.error("Update failed:", err);
                toastr.error("Network or server error.");
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
        if (!id) return toastr.error("Missing ID for deletion.");

        if (!confirm("Are you sure you want to delete this class?")) return;

        fetch(`${urlBase}/${id}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN":
                    document.querySelector('input[name="_token"]')?.value || "",
                Accept: "application/json",
            },
        })
            .then((res) => res.json())
            .then((data) => {
                toastr.success(successMessage);
                const row = document.getElementById(`${rowPrefix}${id}`);
                if (row) row.remove();

                if (typeof onDeleted === "function") {
                    onDeleted();
                }
            })
            .catch((err) => {
                console.error("Delete failed:", err);
                toastr.error("Error deleting class.");
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
