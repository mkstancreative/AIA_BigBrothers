const menuIcon = document.querySelector(".menu-icon");

menuIcon.onclick = function () {
  const sideBar = document.querySelector(".layoutSideBar1");
  const mainContent = document.querySelector(".layoutSideBar2")
  sideBar.classList.toggle("active");
  mainContent.classList.toggle('active');
};


const dropdownToggle = document.querySelectorAll(".dropdown-toggle");
dropdownToggle.forEach((toggle) => {
  toggle.addEventListener("click", (e) => {
    e.preventDefault();
    const hasDropDown = toggle.closest(".has-dropdown");
    hasDropDown.classList.toggle("open");
  });
});
