/*auto Slide*/
var slideIndex = 0;
DisplaySlides();
currentIndex = 1;

function DisplaySlides(imgIndex) {
   currentIndex = imgIndex;
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var arrows =document.getElementsByClassName("arrow")
  console.log(slides);
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "block";  

  setTimeout(DisplaySlides, 4000); // Change image every 2 seconds
}

/*btnDisplaySlide*/
var currentIndex = 1;
var $ = document;

function displaySlideBtn(imgIndex) {
  currentIndex = imgIndex;
  var slides = $.getElementsByClassName("mySlides");
  var arrows = $.getElementsByClassName("arrow");
  
  if(currentIndex > slides.length) {
    currentIndex = 1;
  }
  if(currentIndex < 1) {
    currentIndex = slides.length;
  }
  for(var i = 0 ; i < slides.length ; i++) {
    slides[i].style.display = "none";
    arrows[i].className = arrows[i].className.replace("active", "");
  }
  slides[currentIndex - 1].style.display = "block";
  arrows[currentIndex - 1].className = "arrow active";
  
}
var mywindow;
function openwindow(){
  mywindow=window.open("http://127.0.0.1:5500/main%20page%20mobile/mobile-page-products.html")
  
}
// function searchWord(){
  // let input=document.getElementById('searchbar').value
  // input=input.toLowerCase()
  // let x=document.getElementsByClassName('words')
   
  // for (i=0; i<x.length; i++){
    // if(x[i].innerHTML.toLowerCase().includes(input)){
        // x[i].style.display="none";
    // }
    // else{
      // x[i].style.display="list-item";
    // }
  // }
// console.log(x)



//   for (i = 0; i < x.length; i++) { 
//     if (!x[i].innerHTML.toLowerCase().includes(input)) {
//         x[i].style.display="none";
//     }
//     else {
//         x[i].style.display="list-item";                 
//     }
// }
//show more products detail//


