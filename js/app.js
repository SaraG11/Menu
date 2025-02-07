document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".menu-item");
    const indicator = document.getElementById("indicator");
    const menuNav = document.getElementById("menuNav");
    const scrollLeft = document.getElementById("scrollLeft");
    const scrollRight = document.getElementById("scrollRight");
  
    function updateIndicator(activeItem) {
      const { offsetLeft, offsetWidth } = activeItem;
      indicator.style.width = `${offsetWidth}px`;
      indicator.style.transform = `translateX(${offsetLeft}px)`;
    }
  
    // Ajustar al primer elemento activo
    const activeItem = document.querySelector(".menu-item.active") || menuItems[0];
    if (activeItem) updateIndicator(activeItem);
  
    // Evento click en cada item
    menuItems.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        menuItems.forEach((el) => el.classList.remove("active"));
        this.classList.add("active");
        updateIndicator(this);
      });
    });
  
    // Desplazamiento del menú con botones
    function checkScroll() {
      scrollLeft.classList.toggle("hidden", menuNav.scrollLeft === 0);
      scrollRight.classList.toggle("hidden", menuNav.scrollLeft + menuNav.clientWidth >= menuNav.scrollWidth);
    }
  
    scrollLeft.addEventListener("click", () => {
      menuNav.scrollBy({ left: -150, behavior: "smooth" });
    });
  
    scrollRight.addEventListener("click", () => {
      menuNav.scrollBy({ left: 150, behavior: "smooth" });
    });
  
    menuNav.addEventListener("scroll", checkScroll);
    checkScroll();
  });
  