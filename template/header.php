<head>
<title>marriage</title>
<style type="text/css">
		.menu {position:relative;font-size: 20px;
		 font-stretch: normal;margin-right: 2 0 2 0;
     background-color: lightgrey; text-align: center;}
		 /* {box-sizing:border-box}*/
     .img{background-image: url(images/home-banner.jpg);height: 100%;width: 100%;}
     .img .menu { 
  opacity: 0.8;

}
    .block{background-color: pink;}


		 .slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  background-color: #E0E0E0;
  display: -webkit-box;
  -webkit-box-orient: horizontal;
  /*border-top:2px solid black;
  border-bottom:2px solid black;*/
}
.mySlides.fade1 {margin: 0.5% 1.0% 0.5% 1.0%;}
.mySlides.fade2 {margin: 0.5% 1.0% 0.5% 1.0%;}
.mySlides.fade3 {margin: 0.5% 1.0% 0.5% 1.0%;}
.mySlides.fade4 {margin: 0.5% 1.0% 0.5% 1.0%;}

/*#line{height: 10px; margin:0; padding: 0;background: pink;}*/
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot1 {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #E0E0E0;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  float :left;
}
.dot2 {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #E0E0E0;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  float :left;
}
.dot3 {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #E0E0E0;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  float :left;
}
.dot4 {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #E0E0E0;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  float :left;
}
.on1{margin: 0 0 0 150px;}
.on2{margin: 0 0 0 475px;}
.on3{margin: 0 0 0 800px;}
.on4{margin: 0 0 0 1125px;}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade1 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.fade2 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.fade3 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.fade4 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    
    
  
.pehle{padding: 1 0 120px 0;  }
.yunhi{
        padding-bottom: 180px;}
.yunhi p{padding-left: 75px;}
.pehle p{padding-left: 75px;}
.myslides {
  background-color: white;
  box-shadow: 0 18px 18px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
.dot{background-color:#E0E0E0; }
	</style>
  <script>
var slideIndex1 = 0;
var slideIndex2 = 0;
var slideIndex3 = 0;
var slideIndex4 = 0;
showSlides1();
showSlides2();
showSlides3();
showSlides4();

function showSlides1() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade1");
    var dots = document.getElementsByClassName("dot1");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex1++;
    if (slideIndex1> slides.length) {slideIndex1 = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex1-1].style.display = "block";  
    dots[slideIndex1-1].className += " active";
    setTimeout(showSlides1, 4000); // Change image every 2 seconds
}
function showSlides2() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade2");
    var dots = document.getElementsByClassName("dot2");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex2++;
    if (slideIndex2> slides.length) {slideIndex2 = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex2-1].style.display = "block";  
    dots[slideIndex2-1].className += " active";
    setTimeout(showSlides2, 4000); // Change image every 2 seconds
}
function showSlides3() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade3");
    var dots = document.getElementsByClassName("dot3");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex3++;
    if (slideIndex3> slides.length) {slideIndex3 = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex3-1].style.display = "block";  
    dots[slideIndex3-1].className += " active";
    setTimeout(showSlides3, 4000); // Change image every 2 seconds
}
function showSlides4() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade4");
    var dots = document.getElementsByClassName("dot4");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex4++;
    if (slideIndex4> slides.length) {slideIndex4 = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex4-1].style.display = "block";  
    dots[slideIndex4-1].className += " active";
    setTimeout(showSlides4, 4000); // Change image every 2 seconds
}
</script>
</head>
<body style="max-width: 1300px;">
<div class="img">
    <div class="pehle">
    <p style="font-family: sans-serif;font-size: 32px; color: white;"">everafter.com</p>
    </div>
    <div class="yunhi">
    <p style="font-family: sans-serif;font-size: 48px; color: white;">Happily ever after begins here.</p>
    </div>
    <div class="menu">

    <?php include 'widgets/menu.php';?>
    </div>
</div>


<div class="slideshow-container" >

<div class="mySlides fade1" >
  <div class="numbertext">1 / 4</div>
  <img src="images/slide/1.jpeg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade1">
  <div class="numbertext">2 / 4</div>
  <img src="images/slide/2.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade1">
  <div class="numbertext">3 / 4</div>
    <img src="images/slide/3.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade1">
  <div class="numbertext">4 / 4</div>
    <img src="images/slide/4.png" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade2">
  <div class="numbertext">1 / 4</div>
  <img src="images/slide/24.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade2">
  <div class="numbertext">2 / 4</div>
  <img src="images/slide/6.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade2">
  <div class="numbertext">3 / 4</div>
  <img src="images/slide/7.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade2">
  <div class="numbertext">4 / 4</div>
  <img src="images/slide/21.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade3">
  <div class="numbertext">1 / 4</div>
    <img src="images/slide/19.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade3">
  <div class="numbertext">2 / 4</div>
    <img src="images/slide/10.png" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade3">
  <div class="numbertext">3 / 4</div>
    <img src="images/slide/11.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade3">
  <div class="numbertext">4 / 4</div>
    <img src="images/slide/13.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade4" >
  <div class="numbertext">1 / 4</div>
 <img src="images/slide/14.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade4" >
  <div class="numbertext">2 / 4</div>
 <img src="images/slide/22.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade4" >
  <div class="numbertext">3 / 4</div>
 <img src="images/slide/16.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<div class="mySlides fade4" >
  <div class="numbertext">4 / 4</div>
 <img src="images/slide/25.jpg" style='width: 300px; height: 225px;'>
  <div class="text"></div>
</div>
<br>
</div>
<div class="dot">
<div class="on1" >
  <span class="dot1"></span> 
  <span class="dot1"></span> 
   <span class="dot1"></span> 
    <span class="dot1"></span> 
</div>
<div class="on2" >
  <span class="dot2"></span> 
  <span class="dot2"></span> 
   <span class="dot2"></span> 
    <span class="dot2"></span> 
</div>
<div class="on3" >
  <span class="dot3"></span> 
  <span class="dot3"></span> 
   <span class="dot3"></span> 
    <span class="dot3"></span> 
</div>
<div class="on4" >
  <span class="dot4"></span> 
  <span class="dot4"></span> 
   <span class="dot4"></span> 
    <span class="dot4"></span> 
</div>
</div>
<br>

<script>
showSlides1();
showSlides2();
showSlides3();
showSlides4();
</script>

<div >
<a href="index.php"<img src="images/logo.png" alt="Visual upload" /></a>
<span>
<?php //include 'widgets/login.php';?>
</span>
<div id="main">
</div>
</div>
</body>