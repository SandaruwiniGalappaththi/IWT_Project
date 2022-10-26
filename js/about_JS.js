var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


//Second Slide Show


var sliderIndex = 1;
showDivs(sliderIndex);


function plusDivs(a) {
  showDivs(sliderIndex += a);
}

function showDivs(a) {
  var j;
  var y = document.getElementsByClassName("mySlides");

  if (a > y.length) {sliderIndex = 1}
  if (a < 1) {sliderIndex = y.length};
  for (j = 0; j < y.length; j++) {
      y[j].style.display = "none";
  }
  y[sliderIndex-1].style.display = "block";
}