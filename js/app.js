const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const sidebar = document.getElementById("sidebar");
const menuItems = document.querySelectorAll(".menu-item");
const indicator = document.getElementById("indicator");
const sections = document.querySelectorAll(".content-section");
const menuNav = document.getElementById("menuNav");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const headerImage = document.getElementById("header-image");



document.addEventListener("DOMContentLoaded", function () {
   
    const firstItem = menuItems[0];
    if (firstItem) {
        firstItem.classList.add("active");
        moveIndicator(firstItem);
        updateHeaderImage(firstItem);
        showSection(firstItem.getAttribute("data-section"));
    }

   /// Encuentro el elemento activo o selecciono el primero
   const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
   if (activeItem) {
       activeItem.classList.add("active");
       const section = activeItem.getAttribute("data-section");
       showSection(section);
       moveIndicator(activeItem);
       updateHeaderImage(activeItem);
   }


  // Evento click en cada item del nav
  menuItems.forEach(item => {
        item.addEventListener("click", function (event) {
            event.preventDefault();

            // Remueve la clase 'active' de todos los elementos
            menuItems.forEach(el => el.classList.remove("active"));

            // Agrega la clase 'active' al elemento actual
            this.classList.add("active");

            moveIndicator(this);
            updateHeaderImage(this);
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
        if (section.id === sectionId) {
            section.classList.remove("hidden");
            section.style.display = "block";
        } else {
            section.classList.add("hidden");
            section.style.display = "none";
        }
    });
}

  function updateHeaderImage(sectionElement) {
    if (!sectionElement) return;
    const newImage = sectionElement.getAttribute("data-image");
    if (newImage) {
        headerImage.src = newImage;
    }
  }

});
