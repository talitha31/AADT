// let slideIndex = 0;
// showSlides();

// function showSlides() {
//   let i;
//   let slides = document.getElementsByClassName("imageslide");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}
//   slides[slideIndex-1].style.display = "block";
//   setTimeout(showSlides, 2000); // Change image every 2 seconds
// }

// var slideIndex = 1; 
//   showSlide(slideIndex);

// function nextSlide(n) {
//   showSlide(slideIndex += n);
// }

// function dotslide (n) {
//   showSlide(slideIndex = n);
// }

// function showSlide (n) {
//   var i;
//   var slides = document.getElementsByClassName("imageslide");
//   var dot = document.getElementsByClassName("dot");
// }

// if (n > slides.length) {
//   slideIndex = 1;
// }

// if (n < 1) {
//   slideIndex = slides.length;
// }

// for (i = 0; i < slides.length; i++) {
//   slides[i].style.display = "none";
// }

// for (i = 0; i < slides.length; i++) {
//   dot[i].className = dot[i].className.replace(" active", "");
// }

// slide[slideIndex - 1].style.display = "block";

// dot[slideIndex - 1].className += "active";

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("imageslide");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}