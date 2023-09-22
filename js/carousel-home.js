const carousel = document.querySelector('.minHeight');
const carouselList = carousel.querySelector('.carousel');
const carouselItems = carousel.querySelectorAll('.carousel-list');
const prevButton = carousel.querySelector('.prev-button');
const nextButton = carousel.querySelector('.next-button');
const dots = carousel.querySelectorAll('.carousel-indicator');

const currentSlide = document.querySelector('.current-slide');

let currentIndex = 0;

function showImage() {
  const position = -currentIndex * carouselItems[0].offsetWidth;
  carouselList.style.left = position + 'px';
}

function prevImage() {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = carouselItems.length - 1;
  }
  showImage();
  updateIndicator()
}

function nextImage() {
  if (currentIndex < carouselItems.length - 1) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  showImage();
  updateIndicator()
}

function handleDotClick() {
  const index = parseInt(this.getAttribute('data-index'));
  currentIndex = index;
  showImage();
  updateDots();
}

prevButton.addEventListener('click', prevImage);
nextButton.addEventListener('click', nextImage);

for (let i = 0; i < dots.length; i++) {
  dots[i].addEventListener('click', handleDotClick);
}

function updateDots() {
  for (let i = 0; i < dots.length; i++) {
    if (i === currentIndex) {
      dots[i].classList.add('active-dot');
    } else {
      dots[i].classList.remove('active-dot');
    }
  }
}

// Function to update the indicator
function updateIndicator() {
  currentSlide.textContent = currentIndex + 1;
}

