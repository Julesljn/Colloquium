document.addEventListener("DOMContentLoaded", function () {
    const profilCircle = document.querySelector(".profilCircle");
    const menu = document.querySelector(".menu");
    const closeMenuBtn = document.querySelector(".closeMenu");
    const overlay = document.createElement("div");
  
    overlay.classList.add("overlay");
    document.body.appendChild(overlay);

    function openMenu() {
      menu.classList.add("open");
      overlay.classList.add("visible");
    }
  
    function closeMenu() {
      menu.classList.remove("open");
      overlay.classList.remove("visible");
    }
  
    profilCircle.addEventListener("click", openMenu);
    closeMenuBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);
  });
  