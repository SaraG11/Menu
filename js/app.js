const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const sidebar = document.getElementById("sidebar");


document.addEventListener("DOMContentLoaded", function () {
  // Evento para abrir el sidebar
  menuBtn.addEventListener("click", function () {
      sidebar.classList.remove("-translate-x-full");
      sidebar.classList.add("translate-x-0");
  });

  // Evento para cerrar el sidebar
  closeBtn.addEventListener("click", function () {
    sidebar.classList.remove("translate-x-0");
    sidebar.classList.add("-translate-x-full");
  });

});
  