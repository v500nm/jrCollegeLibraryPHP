<?php
  session_start();
  include("connection.php");
  include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Base.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DashboardJR.css">
    <link rel="stylesheet" type="text/css" href="sidenav.css">


</head>
<body>
  <div class="container-fluid">
    
  <a><img src="https://onfees-production.s3.ap-south-1.amazonaws.com/institutes-headers/409.jpg" style="max-width: 500px;" class="center">
  <span id="clock"></span>
<script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
        var date = new Date();

        // Replace '400px' below with where you want the format to change.
        if (window.matchMedia('(max-width: 400px)').matches) {
            // Use this format for windows with a width up to the value above.
            clockElement.textContent = date.toLocaleString();
        } else {
            // While this format will be used for larger windows.
            clockElement.textContent = date.toString();
        }
    }

    setInterval(clock, 1000);
</script>

 <!--image center html and css-->
 <style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  </style>

<hr>
  <!--code and style for sidebar-->

  <script>
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "100px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
  </script>
  <!--navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 20px 20px 20px 20px">
    <div class="container-fluid">
      <div id="mySidenav" class="sidenav" style="border-radius: 0px 90px 25px 0px">          
        <style>
          .sidenav{overflow: hidden;}
        </style>
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
       
        <ul class="mainmenu">    
        <a href="DashboardJR.php"><img src="https://img.icons8.com/windows/28/000000/home.png"/>Dashboard</a>
          <hr>
           <a href=""><img src="https://img.icons8.com/windows/28/000000/microscope.png"/>Science</a>
           <ul class="submenu">
             <a href="Sci11.php"><img src="https://img.icons8.com/windows/24/000000/chevron-right.png"/>11th SCI</a>
             <a href="Sci12.php"><img src="https://img.icons8.com/windows/24/000000/chevron-right.png"/>12th SCI</a>
           </ul><hr>
           <a><img src="https://img.icons8.com/windows/28/000000/e-commerce.png"/>Commerce</a>
           <ul class="submenu">
           <a href="Com11.php"><img src="https://img.icons8.com/windows/24/000000/chevron-right.png"/>11th COM</a>
           <a href="Com12.php"><img src="https://img.icons8.com/windows/24/000000/chevron-right.png"/>12th COM</a>
           </ul><hr>
                </ul>
      </div>
<style>hr{
border-width: 2px;
border-style:groove;
border-color:cyan;
}</style>
<!-- Use any element to open the sidenav -->
       <span onclick="openNav()">
       <ul class="nav nav-tabs">
        <li class="nav-item">
         <a class="nav-link active" aria-current="page"><img src="https://img.icons8.com/plumpy/24/000000/menu--v1.png"/>Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="signup.php"><img src="https://img.icons8.com/external-tal-revivo-regular-tal-revivo/24/000000/external-login-portal-of-company-server-for-office-access-full-regular-tal-revivo.png"/>Signup/Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php"><img src="https://img.icons8.com/pastel-glyph/25/000000/shutdown.png"> logout</a>
        </li>
        </ul>
      
</span>
      

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  
  </div>
  </nav>
<!--cards for subject and topic selection-->

<hr>
<h2 style="text-align: center;"><u>COURSES</u></h2>
<div class="timeline"> 
  <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
    <div class="timeline__event__icon ">
      <i><img src="https://img.icons8.com/material-outlined/30/000000/test-tube.png"/></i>

    </div>
    <div class="timeline__event__date">
    Science
    </div>
    <div class="timeline__event__content ">
      <div class="timeline__event__title">
      <img src="https://img.icons8.com/ios/50/000000/11.png"/>
      </div>
      <div class="timeline__event__description">
        <p><b>Science - First year</b></p>
        <p>Notes, Syllabus, Model Question papers, Previous Question papers </p>
        <a href="Sci11.php" class="btn btn-primary">Material Here!</a>
      </div>
    </div>
  </div>
  <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
    <div class="timeline__event__icon">
      <i><img src="https://img.icons8.com/material/30/000000/math--v1.png"/></i>

    </div>
    <div class="timeline__event__date">
      Science
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      <img src="https://img.icons8.com/ios/50/000000/12.png"/>
      </div>
      <div class="timeline__event__description">
        <p><b>Science - Second Year</b></p>
        <p>Notes, Syllabus, Model Question papers, Previous Question papers </p>
        <a href="Sci12.php" class="btn btn-primary">Material Here!</a>
      </div>
    </div>
  </div>
  <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
    <div class="timeline__event__icon">
      <i><img src="https://img.icons8.com/small/30/000000/parallel-tasks.png"/></i>

    </div>
    <div class="timeline__event__date">
      Commerce
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      <img src="https://img.icons8.com/ios/50/000000/11.png"/>
      </div>
      <div class="timeline__event__description">
        <p><b>Commerce - First Year</b></p>
        <p>Notes, Syllabus, Model Question papers, Previous Question papers </p>
        <a href="Com11.php" class="btn btn-primary">Material Here!</a>
      </div>

    </div>
  </div>
  <div class="timeline__event animated fadeInUp timeline__event--type1">
    <div class="timeline__event__icon">
      <i><img src="https://img.icons8.com/small/30/000000/positive-dynamic.png"/></i>

    </div>
    <div class="timeline__event__date">
      Commerce
    </div>
    <div class="timeline__event__content">
      <div class="timeline__event__title">
      <img src="https://img.icons8.com/ios/50/000000/12.png"/>
      </div>
      <div class="timeline__event__description">
        <p><b>Commerce - Second Year</b></p>
        <p>Notes, Syllabus, Model Question papers, Previous Question papers </p>
        <a href="Com12.php" class="btn btn-primary">Material Here!</a>
      </div>
    </div>
  </div>
 </div>
<hr>
<h2 style="text-align: center;">About us!..</h2>
<!--<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://qph.fs.quoracdn.net/main-qimg-0802d9401b1b80d8e560d5b2643fbe7f" class="d-block w-100" alt="img1" height="300px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/profile_images/539763996732047360/hQF3KGxu_400x400.png" class="d-block w-100" alt="img2" height="300px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.indianetzone.com/photos_gallery/50/Bachelor_of_Management_Studies_BMS.jpg" class="d-block w-100" alt="img3" height="300px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->
<hr>
<!--Footer consist of credits,license and about,contact-->
<footer class="bd-footer py-5 mt-5 bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 mb-3">
        
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="" aria-label="Chetana">
        <img src="https://img.icons8.com/material-two-tone/24/000000/student-center.png"/><title>Chetana</title>
          <span class="fs-5">Chetana</span>
        </a>
        <ul class="list-unstyled medium text-muted">
          <li class="mb-2">Designed and built with all the love in the world by the <a href="https://my.tapni.co/v3nm">V3NM(SY Bsc-IT).</a></li>
          <li class="mb-2"> <a href="" target="_blank" rel="license noopener"></a> <a href="" target="_blank" rel="license noopener"></a></li>
          <li class="mb-2">Version: Phase 1.</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Courses</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="Sci11.php">11th Science</a></li>
          <li class="mb-2"><a href="Sci12.php">12th Science</a></li>
          <li class="mb-2"><a href="Com11.php">11th Commerce</a></li>
          <li class="mb-2"><a href="Com12.php">12th Commerce</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Contact Us!</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwRrkDpKfWPDCdfSRtJdKQXffRHNsnvGhtgwChTzCXxPMNWDvwhlVBHWrxHnQTlRcQxdSWN"><img src="https://img.icons8.com/material-outlined/20/000000/email-sign.png"/></a></li>
          <li class="mb-2"><a href="tel:+91-7977232115"><img src="https://img.icons8.com/external-sbts2018-outline-sbts2018/20/000000/external-contact-social-media-basic-1-sbts2018-outline-sbts2018.png"/></a></li>
          <li class="mb-2"><a href="https://github.com/venomerous"><img src="https://img.icons8.com/material-outlined/24/000000/github.png"/></a></li>
        </ul>
      </div>
   
  
    </div>
  </div>
</footer>

</div> <!--Container-fluid Div-->
</body>
</html>