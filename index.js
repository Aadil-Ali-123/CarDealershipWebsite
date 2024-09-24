// Automatic image slider animation that slides between images


const nextel = document.querySelector(".next");
const prevel = document.querySelector(".prev");
const imgcont = document.querySelector(".imgcont");
const imags = document.querySelectorAll("img");
let currentimg = 0;
let timeout;

// function activated and changes image if this button is clicked
nextel.addEventListener("click", () => {
  clearTimeout(timeout);
  currentimg++;
  updateimg();
});

// function activated and changes image to previous if this button is clicked
prevel.addEventListener("click", () => {
  currentimg--;
  clearTimeout(timeout);
  updateimg2();
});

// Automatically changes image if no user input
function updateimg() {
  if (currentimg > imags.length - 1) {
    currentimg = 0;
  }
  imgcont.style.transform = `translateX(-${currentimg * 500}px)`;
  timeout = setTimeout(() => {
    currentimg++;
    updateimg();
  }, 5000);
}
// Automatically changes image if no user input
function updateimg2() {
  if (currentimg < 0) {
    currentimg = imags.length - 1;
  }
  imgcont.style.transform = `translateX(-${currentimg * 500}px)`;
}
