<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/import.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">


<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
	
	<div class ="hometoplarge">
	<span>DUAFS</span>
	</div>
	<div class ="hometop">
	<span>Capstone Project</span>
	</div>

<img src="./images/lionbw.png" style="width:10%;height:10%;display:block;margin-left:auto;margin-right:auto">

 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/belltower.jpg" style="width:100%">
    <div class="text">Campus & Belltower</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/windgate.jpg" style="width:100%">
    <div class="text">Windgate Art and Design Building</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/baldor.jpg" style="width:100%">
    <div class="text">Baldor Technology Center</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<!-- js controlling the slideshow -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

<!-- End Page Content -->

</div>



<!-- Footer -->


<!--
name=" Tyce Yarborough"
!-->
</body>
</html>
