document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const carouselInner = carousel.querySelector(".carousel-inner");
    const items = carouselInner.querySelectorAll(".item");
    const indicators = carousel.querySelector(".carousel-indicators");
    const prevButton = carousel.querySelector(".carousel-prev");
    const nextButton = carousel.querySelector(".carousel-next");
    const currentSlide = document.querySelector('.current-slide');

    let currentItem = 0;

    function showItem(index) {
        items.forEach((item, i) => {
            if (i === index) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });

        const indicatorItems = indicators.querySelectorAll("li");
        indicatorItems.forEach((item, i) => {
            if (i === index) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    }

    function nextItem() {
        currentItem = (currentItem + 1) % items.length;
        showItem(currentItem);
    }

    function prevItem() {
        currentItem = (currentItem - 1 + items.length) % items.length;
        showItem(currentItem);
    }

    nextButton.addEventListener("click", nextItem);
    prevButton.addEventListener("click", prevItem);

    showItem(currentItem);
});
