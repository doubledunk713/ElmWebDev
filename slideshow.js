/* 
 * slideshow.js
 * 2019-12-25
 */

var slideIndex = 1;
var slideShow;
showSlidesAuto();

window.onload = function () {
    document.getElementsByClassName("prev")[0].onclick = function () {
        plusSlides(-1);
    };
    document.getElementsByClassName("next")[0].onclick = function () {
        plusSlides(1);
    };
    var num = 0;
    var dots = document.getElementsByClassName("dot");
    console.log(dots);
    for (let element in dots) {
//        num++;
        dots[element].onclick = function () {
            currentSlide(++num)
        };
        console.log(num);
    }
    showSlides(slideIndex);
};


// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Automatic slideshow function
function showSlidesAuto() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    // Change image every 5 seconds
    slideShow = setTimeout(showSlidesAuto, 5000);
}

/**
 * 
 * @param {type} n
 * @returns {undefined}
 */
function showSlides(n) {
    // clear the current timer if a dot was clicked
    clearTimeout(slideShow);
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    console.log("showSlides");
    console.log(slides);
    console.log(dots);
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    slideShow = setTimeout(showSlidesAuto, 5000);
    console.log(slideIndex);
}
