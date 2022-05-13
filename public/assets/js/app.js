// Header Config
const mobile_menu = document.getElementById("mobile-menu");
const mobile_menu_toggle = document.getElementById("mobile_menu_toggle");

mobile_menu_toggle.addEventListener('click', () => {
  mobile_menu.classList.toggle("hidden");
});