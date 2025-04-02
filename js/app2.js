const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const sidebar = document.getElementById("sidebar");
const menuItems = document.querySelectorAll(".menu-item");
const indicator = document.getElementById("indicator");
const sections = document.querySelectorAll(".content-section");
const menuNav = document.getElementById("menuNav");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const headerImage = document.querySelector("#header-image");



document.addEventListener("DOMContentLoaded", function () {
  // Define un objeto que asocia cada sección con una imagen diferente
  const imageMap = {
    "cocteles": "./img/vinos.jpg",
    "desayuno": "./img/desayuno_moon.jpg",
    "cena": "./img/faro_cena.jpg",
    "postres": "./img/postre.jpg"
  };
  
  
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
      const section = activeItem.getAttribute("data-section");
      showSection(section);
      moveIndicator(activeItem);
      updateHeaderImage(section);
   }


  // Evento click en cada item
  menuItems.forEach(item => {
    item.addEventListener("click", function (event) {
        event.preventDefault();

        // Remueve la clase 'active' de todos los elementos
        menuItems.forEach(el => el.classList.remove("active"));

        // Agrega la clase 'active' al elemento actual
        this.classList.add("active");

        const section = this.getAttribute("data-section");
            showSection(section);
            moveIndicator(this);
            updateHeaderImage(section);
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

  function updateHeaderImage(section) {
    if (imageMap[section]) {
        headerImage.src = imageMap[section]; // Cambia la imagen del header
    }
  }

});
  