const navToggler = document.querySelector(".navbar-toggler-icon");
const navMenu = document.querySelector("#navbarColor01");

navToggler.addEventListener("click", () => {
    if (navMenu.style.display === "none") {
        navMenu.style.display = "block";
        return;
    }
    navMenu.style.display = "none";
});



const resetNavLinksOnResize = () => {

    if (window.matchMedia("(min-width:768px)").matches && navMenu.style.display === "none") {
        navMenu.style.display = "block";
    }

}

window.addEventListener('resize', resetNavLinksOnResize);