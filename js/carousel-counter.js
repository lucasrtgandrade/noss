const carousel = document.querySelector('.carousel');
const slides = document.querySelectorAll('.slide');
const currentSlide = document.querySelector('.current-slide');
const totalSlides = document.querySelector('.total-slides');
let currentIndex = 0;

// Function to update the indicator
function updateIndicator() {
  currentSlide.textContent = currentIndex + 1;
}

// Function to show a specific slide based on data-index
function showSlide(index) {
  slides.forEach((slide) => {
    slide.style.display = 'none';
  });
  slides[index].style.display = 'block';
  currentIndex = index;
  updateIndicator();
}

// Initialize the indicator
totalSlides.textContent = slides.length;
updateIndicator();
