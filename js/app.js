const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const sidebar = document.getElementById("sidebar");
const menuItems = document.querySelectorAll(".menu-item");
const sections = document.querySelectorAll(".content-section");



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

  // Evento para los elementos del menu
  const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
  if(activeItem) updateIndicator(activeItem)
  
  // Evento click en cada item
  menuItems.forEach((item) => {
      item.addEventListener("click", function (e) {
      e.preventDefault();
      menuItems.forEach((el) => el.classList.remove("active"));
      this.classList.add("active");
      updateIndicator(this);

      // Obtener la sección correspondiente
      const targetSection = this.getAttribute("data-section");

      // Ocultar todas las secciones
      sections.forEach(section => section.classList.add("hidden"));

      // Mostrar la sección seleccionada
      document.getElementById(targetSection).classList.remove("hidden");

      // Remover la clase 'active' de todos los botones
      menuItems.forEach(btn => btn.classList.remove("active"));
      
      // Agregar la clase 'active' al botón seleccionado
      this.classList.add("active");
      
      });
  });


  function updateIndicator(activeItem) {
    const { offsetLeft, offsetWidth } = activeItem;
    indicator.style.width = `${offsetWidth}px`;
    indicator.style.transform = `translateX(${offsetLeft}px)`;
  }
});
  