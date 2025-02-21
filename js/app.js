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

   // Encuentra el elemento activo o selecciona el primero
   const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
   if (activeItem) {
       showSection(activeItem.getAttribute("data-section"));
       moveIndicator(activeItem);
   }

  // Evento al hacer clic en un menú-item
  menuItems.forEach((item) => {
      item.addEventListener("click", (e) => {
          // Remover clase active de todos los items
          menuItems.forEach((el) => el.classList.remove("active"));

          // Agregar clase active al elemento clickeado
          e.currentTarget.classList.add("active");

          // Actualizar indicador
          moveIndicator(e.currentTarget);
      });
      
  });

  
  
  // Evento click en cada item
  menuItems.forEach(item => {
    item.addEventListener("click", function (event) {
        event.preventDefault();

        // Remueve la clase 'active' de todos los elementos
        menuItems.forEach(el => el.classList.remove("active"));

        // Agrega la clase 'active' al elemento actual
        this.classList.add("active");

        // Muestra la sección correspondiente
        showSection(this.getAttribute("data-section"));
    });
  });

  function moveIndicator(element) {
    if (!element) return;
    const rect = element.getBoundingClientRect();
    const parentRect = element.parentElement.getBoundingClientRect();
    indicator.style.width = `${rect.width}px`;
    indicator.style.transform = `translateX(${rect.left - parentRect.left}px)`;
  }

  function showSection(sectionId) {
    sections.forEach(section => {
        section.style.display = section.id === sectionId ? "block" : "none";
    });
  }

});
  