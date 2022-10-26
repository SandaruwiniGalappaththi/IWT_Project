var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
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



// Calculation Forem Total

const claBtn = document.getElementById('calculator');
let years1 = document.getElementById('6years');
let years12 = document.getElementById('12years');
let years18 = document.getElementById('18years');
let bookdate = document.getElementById('bookdate');
let arrivedate =document.getElementById('arrivedate');
const totalPriceDiv = document.getElementById('totalPrice');
const hiddenInput = document.getElementById('totalpriceinput');

claBtn.addEventListener('click', function(e){
    e.preventDefault();
    years1 = parseInt(years1.value);
    years12 = parseInt(years12.value);
    years18 = parseInt(years18.value);
    bookdate = bookdate.value;
    arrivedate = arrivedate.value;

    bookdate = bookdate.substring(8,10)
    arrivedate = arrivedate.substring(8,10);

    const price = 100;
    const pepoles =  years1 + years12 + years18;
    const date = parseInt(arrivedate) - parseInt(bookdate);
    const totalPrice = (pepoles * price) * date ;
    hiddenInput.value = totalPrice;
    totalPriceDiv.textContent = totalPrice;
})