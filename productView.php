<!doctype html>
<html lang="en">
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;text-align: left;padding: 2px;
}
.navbar-dark .navbar-nav .nav-link {
    color: orange !important;
}
#cart{
	text-decoration:none;
}
.cart_sup{
	color: #131212;font-weight: bold;text-decoration:none;top: -1.05em !important;left: -1px !important;text-decoration:none;	
}
#sidebar ul li{
	color:rgba(230,230,230,0.9);
	list-style:none;
	border-bottom: 1px solid rgba(100,100,100,0.3);
}
#sidebar .toggle-btn{
position:absolute;
	left:230px;
	top:20px;
}
#sidebar{

position: fixed;
width:200px;
height:100%;
background:#151719;
	z-index:190000;
	left:-200px;
	transition: all 500ms linear;
}
#sidebar.active{
	left:0px;
}
.pricing-block:hover{
	box-shadow: 5px 10px 8px #888888;
}
.category{
	font-weight: bold;
	font-size: 16px;
    width: 150px;
    height: 150px;
    background: #FF5733 !important;
    color: white;
    text-align: center;
    margin: 0 auto;
    border-radius: 100%;
    padding-top: 40px;
	border: 1px solid #FF5733;
	transition : all 500ms linear;
	cursor:pointer;
}
.category:hover{
	color: #fff;
	
	background: #FF5733 !important;
	transition : all 500ms linear;
	box-shadow: 5px 10px 8px #888888;
	}
.btn-primary{
	background-color:#FF5733 !important;
	border-color:#FF5733 !important;
	}
	.btn-primary:hover{
	background-color:#F65937 !important;
		border-color:#F65937 !important;
	}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s; 
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.closeModal {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
  margin-top: -20px;
  margin-right: -5px;
}

.closeModal:hover,
.closeModal:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.closeMenu {
  float: right;
  font-size: 26px;
  font-weight: bold;
  margin-right: 5px;
}

.closeMenu:hover,
.closeMenu:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 10px;
  background-color:#FF5733;
  color: white;
    margin-left: -15px;
    margin-right: -15px;
}
	text-align:center;
}

.modal-body {padding: 2px 10px; color:black;}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: black;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(255,255,255,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
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
  .prev, .next,.text {font-size: 11px}
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawseom Icon CSS -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="shortcut icon" type="image/icon" href="assets/img/cart-icon.png"/>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
   
    <title>ମୋ ଦୋକାନ ( My Shop )</title>
</head>
<body id="page-top">
	<!-- The Modal -->




	

<div class="container-fluid fixed-top" style="background-color:#f8f9fa;height:30px;width:100%;font-size: 12px;color:black;">
		
		<p class="pull-right"><i class="fa fa-envelope" style="color:orange;margin-top:5px;"></i> <a href="mailto:support@modokaan.com">support@modokaan.com </a>&nbsp;&nbsp;<i class="fa fa-whatsapp" style="color:green"></i> <a href="tel:+91-7008766586">(+91)7008766586</a></p>
	</div>
	<div id="sidebar" style="background-color:#f8f9fa;">
		<i class="closeMenu toggleSidebar" style="color:#0774d2;cursor:pointer;">&times;</i>
		<ul style="padding: 0px !important;margin-top: 25px;color:black">
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="#product" >Products</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/services.php" >Promotions</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#home" >Home</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#about" >About</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#charity" >Charity</a></li>
			<li><a class="nav-link js-scroll-trigger toggleSidebar" href="/home.php#contact" >Contact</a></li>
		</ul>
	</div>
	<div id="toggleSidebar" class="toggle-btn  navbar-dark container-fluid fixed-top" style="margin-top:28px;background-color:#fff;height:45px;line-height:45px">
			 <i class="fa fa-bars faa-horizontal animated toggleSidebar" style="font-size: 22px;color: #ea740e;cursor:pointer"></i>
			 <a href="#page-top"><img src="./assets/img/finallogo.png" style="height: 50px;margin-top: -40px;"></a>
			<a  class="pull-right" id="cart" href="#purchase"><i class="fa fa-shopping-cart" style="color:#FF5733;font-size:20px;line-height:45px"></i>
				<sup class="cart_sup">0</sup></a>
		</div>
	<div class="text-center container-fluid fixed-top" style="margin-top:22px">
		<p id="itemadded" style="color:orange;font-weight:bold;font-size:16px;"></p>		
	</div>
    <section class="section section-top section-full " style="padding:1px">       
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 col-lg-12 ">
					        <div class="col-md-12 col-lg-12 text-center" style="padding-top:100px">
                    <!-- Heading -->
                    <h2 class="lg-title mb-2" style="line-height: 50px;">ମୋ ଦୋକାନ (My Shop)</h2>
                    <!-- Subheading -->
                    <b class="mb-5 ;" style="color:orange;font-weight:bold;font-size:25px;margin-top: -10px">
                        ଓଡିଶାର ବାସ୍ନା, ଓଡ଼ିଆଙ୍କ ପସନ୍ଦ
                    </b><br>
                    <b><h3>Product Details</h3></b>					
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row" >
          <div class="col-sm-12 col-lg-12 col-md-12" style="height: 200px;">
          <div class="slideshow-container">
          <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="assets/img/1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="assets/img/2.png" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img src="assets/img/3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>

          <!-- `<div style="text-align:center;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div> -->
        
        </div>
        </div>
        <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: left;">
                <button class="btn btn-info btn-lg" style="height: 58px">Share <i class="fa fa-share-alt"></i></button>
                <a href="http://api.whatsapp.com://send?text=modokaan.com,  Check the Product Spicy Mixure. Please click here to see full Details." target="_blank" data-action="share/whatsapp/share"><button style="background: #32ba32;height: 35px;color: white;
                  margin-bottom: 5px;border-radius: 20px; width: 35px;border: none;"><i class="fa fa-whatsapp fa-1x" style="color:white;cursor:pointer"></i></button></a>
                 <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><button style="background: blue;
                    height: 35px;color: white;margin-bottom: 5px;border-radius: 20px;width: 35px;border: none;"><i class="fa fa-facebook fa-1x" style="color:white;cursor:pointer"></i></button></a>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-lg"><i class="fa fa-cart-plus fa-2x"></i> Add to cart</button>
              </div>
        </div>
        
       
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="col-sm-12 col-lg-12 col-md-12">

          <h2 style="font-size: 30px;">Spicy Mixture</h2>
          <!-- <h4>Seller Name :<small> Arati Foods,Bhubaneswar</small><br>
            Price :<small> Rs.</small><big> 90 </big> <small>/ 500gm</small><br>
            Ingredients :<small> Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas</small><br>
            Maximum shelf life : <small>1 month </small><br> -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <h4>Seller Name :</h4>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                  <h4><small> Arati Foods,Bhubaneswar</small></h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <h4> Price :</h4>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                  <h4><small> Rs.</small><big> 90 </big> <small>/ 500gm</small></h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <h4>Ingredients :</h4>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                  <h4><small>Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas,Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas,Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas,Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas,Gram flour(besan),Ground nuts,Refined oil,Cashew,Green peas</small></h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <h4>Maximum shelf life :</h4>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6">
                  <h4><small> 1 Month</small></h4>
                </div>          
            </div><br><br><br>
            <div class="row">
              
              
            </div>
                
        
        </div>
      </div>
      
    </div>      
                        
                
    </section>
    <script>
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
</script>
  </body>