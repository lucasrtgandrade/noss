const carousel = document.querySelector('.minHeight');
const carouselList = carousel.querySelector('.carousel');
const carouselItems = carousel.querySelectorAll('.carousel-list');
const prevButton = carousel.querySelector('.prev-button');
const nextButton = carousel.querySelector('.next-button');
const dots = carousel.querySelectorAll('.carousel-indicator');

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
  updateDots();
}

function nextImage() {
  if (currentIndex < carouselItems.length - 1) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  showImage();
  updateDots();
}

function handleDotClick() {
  const index = parseInt(this.getAttribute('data-index'));
  currentIndex = index;
  showImage();
  updateDots();
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

prevButton.addEventListener('click', prevImage);
nextButton.addEventListener('click', nextImage);

for (let i = 0; i < dots.length; i++) {
  dots[i].addEventListener('click', handleDotClick);
}

// Swipe

const dragging = (e) => {
  console.log(e.pageX);
}

carousel.addEventListener("mousemove", dragging);


