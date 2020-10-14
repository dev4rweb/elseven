 document.addEventListener('DOMContentLoaded', (event) => {
console.log('DOM fully loaded and parsed slider');

 });
let mainSlider = document.getElementById('mainSlider');
let slides = document.getElementsByClassName("main-slides");
let dots = document.getElementsByClassName("dot");
let slideIndex = 1;
let autoplay;
let isAutoPlay = true;
startShowSlides();

function startShowSlides() {
    // console.log('autoplay start');
    isAutoPlay = true;
    let i;

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    autoplay = setTimeout(startShowSlides, 5000); // Change image every 2 seconds
}

function showSlides(n) {
    let i;
    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function stopSlideShow() {
    if (isAutoPlay) {
        console.log('autoplay stop');
        clearInterval(autoplay);
        isAutoPlay = false;
    }

}

function plusSlides(n) {
    stopSlideShow();
    showSlides(slideIndex += n);
}

mainSlider.addEventListener("mouseover", (ev) => {
    console.log('mouseover');
    if (isAutoPlay) {
        stopSlideShow();
    }
});

mainSlider.addEventListener("mouseleave", (ev) => {
    console.log('mouseleave');
    if (!isAutoPlay) {
        startShowSlides();
    }
});

const windowInnerWidth = window.innerWidth;
const wrap = document.getElementsByClassName('slideshow-container')[0];
let startPoint;
let endPoint;

wrap.addEventListener("touchstart", evt => {
    // console.log('touchstart');
    // console.log(evt);
    startPoint = evt.touches[0];
    stopSlideShow();
});

wrap.addEventListener('touchend', evt => {
    // console.log("touchend");
    // console.log(evt);
    //wrap.classList.add("rollAnim");
    let translateX = endPoint.clientX - startPoint.clientX;

    if (Math.abs(translateX) > windowInnerWidth * 2 / 5) {
        if (translateX > 0) {
            slideIndex -= 1 // slideIndex
        } else if (translateX < 0) {
            slideIndex += 1;
        }
    }
    showSlides(slideIndex);
    // wrap.style.transform = `translateX(${-slideIndex * windowInnerWidth}px)`;
});

wrap.addEventListener('touchmove', evt => {
    endPoint = evt.touches[0];
    let translateX = evt.touches[0].clientX - startPoint.clientX;

    if (slideIndex === 1 && translateX > 0) return;
    if (slideIndex === (slides.length) && translateX < 0) return;

    // wrap.style.transform = `translateX(${-slideIndex * windowInnerWidth + translateX}px)`;
});

wrap.addEventListener("transitionend", () => {
    //wrap.classList.remove('rollAnim');
});


