<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="google-site-verification" content="T0mu8chKPZn1yIh4FqcmXp1mxwgqNBZ7lBTSKeWhVHU">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="float-panel.js"></script>
<title>IPTH-International Proficiency Testing House</title>
<script>


function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
///////////////////////////////////////////////////////////////////////////////

function colorContact(evt, cityName) {
  var i, x, tablinks, col;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  
  
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
 
  document.getElementById(cityName).style.display = "block";
    tablinks[3].className = tablinks[3].className.replace("red", " w3-red");


}
</script>


<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}


.slideanim.slide {visibility: visible; animation:slide 3s;}
.slideanim::after {
    /* useful when its child elements are float:left; */
    content: "";
    display: table;
    clear: both;
}

@keyframes slide {
    0% {
        opacity: 0;
        transform: translateX(50%);
    } 
    100% {
        opacity: 1;
        transform: translateX(0);
    } 
}
</style>



 
<div class="w3-top">
<div class="w3-bar w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button w3-padding-large"><img src="Images/logo.jpg" width="80px" height="40px"></a>
    
  <div class="w3-container w3-bar-item w3-center" style="margin-left:300px;">
  <button class="w3-bar-item w3-button tablink w3-red w3-padding-large" onclick="openCity(event,'Home')"><b>HOME</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large" onclick="openCity(event,'About')"><b>ABOUT US</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large" onclick="openCity(event,'Service')"><b>SERVICES</b></button>
  <button class="w3-bar-item w3-button tablink w3-padding-large red" onclick="openCity(event,'Contact')"><b>CONTACT US</b></button>

  </div>
  </div>
  </div>


 @if($Badal ?? ''==1)
<body onload="colorContact(event,'Contact')">
 @else
 <body>
 @endif

<!--========================================================== ====================-->

<!-- Page content -->

<div class="w3-content city" style="max-width:2000px;margin-top:40px"  id="Home" style="display: none">
  <!-- Automatic Slideshow Images -->
 @include('Home')
</div>

<!-- ================================================================================================================= -->
<div id="About" style="display:none" class="city">
@include('AboutUs')
</div>
<!-- ================================================================================================================= -->

<!-- Page content -->
<div class="w3-content city" style="max-width:2000px;display:none"  id="Service">
  @include('Service')
</div>

  
<!--  ========================================================================================================= -->  
  
<div class="city" style="display: none" id="Contact">
  @include('Contact')
</div>


</body>
</html>
