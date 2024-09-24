// Responsive mobile hamburger menu

const mobile = document.querySelector("#mobile");
const nav_elements = document.querySelector(".navEls");

// if the mobile hamburger is clicked it toggles the active and is-active class in css to the classlist of the mobile class and the nav_elements class
mobile.addEventListener("click", ()=> {
    mobile.classList.toggle("is-active");
    nav_elements.classList.toggle("active");
})