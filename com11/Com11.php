<?php
  session_start();
  include("connection.php");
  include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Base.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="subjectcards.css">
    <link rel="stylesheet" type="text/css" href="sidenav.css">
    <title>11th Commerce</title>
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

<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

  </style>
<hr>
  <!--code for part 1-->
  
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 20px 20px 20px 20px">
    <div class="container-fluid">
      <div id="mySidenav" class="sidenav" style="border-radius: 0px 90px 25px 0px">          
        <style>
          .sidenav{overflow: hidden;}
        </style>
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
       
        <ul class="mainmenu">    
          <a href="DashboardJR.php"><img src="https://img.icons8.com/windows/28/000000/home.png"/>Dashboard</a><hr>
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
         <a href=""><img src=""/>About Us</a>
         <a href=""><img src="https://img.icons8.com/ios/28/000000/faq.png"/>>FAQ's</a>
        </ul><hr>
      </div>
<style>hr{
border-width: 2px;
border-style:ridge;
border-color:cyan;
}</style>
<!-- Use any element to open the sidenav -->
       <span onclick="openNav()">
       <ul class="nav nav-tabs">
        <li class="nav-item">
         <a class="nav-link active" aria-current="page"><img src="https://img.icons8.com/plumpy/24/000000/menu--v1.png"/>11th Commerce</a>
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
<hr>
<ol class="breadcrumb" >
    <li class="breadcrumb-item"><a href="Com11.php">11th Commerce </a></li>
    <li class="breadcrumb-item"><a href="Com12.php">12th Commerce</a></li>
  </ol>
  <style>
    .breadcrumb{
      display: flex;
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }
  </style><hr>

 
<hr>
  <h3 style="text-align:center">Commerce class </h3><hr>
  <!--Subjects-->
  
  <!--Accordion for subjects-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    
  <a class="card1" href="Com11English.php">
    <h3>English</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers</p>       
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div>
  <div class="col">
  <a class="card1" href="Com11Hindi.php">
    <h3>Hindi</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div>
  <div class="col">
  <a class="card1" href="Com11Marathi.php">
    <h3>Marathi</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11BK.php">
    <h3>Book keeping & Accountancy</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11OCM.php">
    <h3>Organisation of Commerce & Management (OCM)</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11Maths.php">
    <h3>Mathematics & Statistics</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11SP.php">
    <h3>Secretarial Practice (SP)</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11IT.php">
    <h3>Information Technology (IT)</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div> <div class="col">
  <a class="card1" href="Com11Eco.php">
    <h3>Economics</h3>
    <p class="small">Notes, Syllabus, Model Question papers, Previous Question papers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
  </div>

  

  
</div>
<hr>
<footer class="bd-footer py-5 mt-5 bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 mb-3">
        
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="" aria-label="Chetana">
        <img src="https://img.icons8.com/material-two-tone/24/000000/student-center.png"/><title>Chetana</title>
          <span class="fs-5">Chetana</span>
        </a>
        <ul class="list-unstyled small text-muted">
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

   </div>
</body>
</html>