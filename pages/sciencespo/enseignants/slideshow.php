<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<link href="slideshow.css" rel="stylesheet">
<script src="slideshow.js"></script>

</head>

<body>

<div id="container-slide">
<div class="slideshow-container">
<div class="slideshow-inner">
  <div class="mySlides fade">

    <img  src='img/livres/sp1.jpg' style='width: 100%; height: 100%' alt="livre 1"/>
    
  </div>

  <div class="mySlides fade">

    <img  src='img/livres/sp2.jpg' style='width: 100%; height: 100%' alt="livre 2"/>
    
  </div>

  <div class="mySlides fade">

    <img  src='img/livres/sp3.jpg' style='width: 100%;height: 100%' alt="livre 3"/>
    
  </div>

  <div class="mySlides fade">

    <img  src='img/livres/sp4.jpg' style='width: 100%;height: 100%' alt="livre 4"/>
    
  </div>

  <div class="mySlides fade">

<img  src='img/livres/sp5.jpg' style='width: 100%;height: 100%' alt="livre 5"/>

</div>
<div class="mySlides fade">

<img  src='img/livres/sp6.jpg' style='width: 100%;height: 100%' alt="livre 6"/>

</div>
<div class="mySlides fade">

<img  src='img/livres/sp7.jpg' style='width: 100%;height: 100%' alt="livre 7"/>

</div>
<div class="mySlides fade">

<img  src='img/livres/sp8.jpg' style='width: 100%;height: 100%' alt="livre 8"/>

</div>
  
  </div>


  <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
  <a class="next" onclick='plusSlides(1)'>&#10095;</a>
</div>
<br/>
<!-- visibility: hidden; -->

<div style='text-align: center; top:-5px;'>
  <span class="dot" onclick='currentSlide(1)'></span>
  <span class="dot" onclick='currentSlide(2)'></span>
  <span class="dot" onclick='currentSlide(3)'></span>
  <span class="dot" onclick='currentSlide(4)'></span>
  <span class="dot" onclick='currentSlide(5)'></span>
  <span class="dot" onclick='currentSlide(6)'></span>
  <span class="dot" onclick='currentSlide(7)'></span>
  <span class="dot" onclick='currentSlide(8)'></span>
</div>

</div>

</body>
</html>
