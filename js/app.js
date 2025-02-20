const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const sidebar = document.getElementById("sidebar");
const menuItems = document.querySelectorAll(".menu-item");
const indicator = document.getElementById("indicator");
const sections = document.querySelectorAll(".content-section");
const menuNav = document.getElementById("menuNav");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

const scrollAmount = 100; // Ajusta según el tamaño de los elementos

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

  /// Obtener el elemento activo al cargar la página
  const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
  updateIndicator(activeItem);

  // Evento al hacer clic en un menú-item
  menuItems.forEach((item) => {
      item.addEventListener("click", (e) => {
          // Remover clase active de todos los items
          menuItems.forEach((el) => el.classList.remove("active"));

          // Agregar clase active al elemento clickeado
          e.currentTarget.classList.add("active");

          // Actualizar indicador
          updateIndicator(e.currentTarget);
      });
      
  });

  // Evento para actualizar el indicador cuando cambia el tamaño de la ventana
  window.addEventListener("resize", () => {
      const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
      updateIndicator(activeItem);
  });
  
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

  // Función para actualizar la posición del indicador
  function updateIndicator(activeItem) {
    if (!activeItem) return; 
    const { offsetLeft, offsetWidth } = activeItem;
    indicator.style.width = `${offsetWidth}px`;
    indicator.style.transform = `translateX(${offsetLeft}px)`;
  } 


});
  