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
    <link rel="stylesheet" type="text/css" href="sidenav.css">
    <link rel="stylesheet" type="text/css" href="list.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>11th Science</title>
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
         <a href=""><img src="https://img.icons8.com/ios/28/000000/faq.png"/>FAQ's</a>
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
         <a class="nav-link active" aria-current="page"><img src="https://img.icons8.com/plumpy/24/000000/menu--v1.png"/>12th Science</a>
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
<li class="breadcrumb-item"><a href="Sci12English.php">English</a></li>
    <li class="breadcrumb-item"><a href="Sci12Hindi.php">Hindi</a></li>
    <li class="breadcrumb-item"><a href="Sci12Marathi.php">Marathi</a></li>
    <li class="breadcrumb-item"><a href="Sci12Physics.php">Physics</a></li>
    <li class="breadcrumb-item"><a href="Sci12Chemistry.php">Chemistry</a></li>
    <li class="breadcrumb-item"><a href="Sci12Maths.php">Maths</a></li>
    <li class="breadcrumb-item"><a href="Sci12Biology.php">Biology</a></li>
    <li class="breadcrumb-item"><a href="Sci12IT.php">IT</a></li>
    <li class="breadcrumb-item"><a href="Sci12CS.php">CS</a></li>
    <li class="breadcrumb-item"><a href="Sci12Electronics.php">Electronics</a></li>
    <li class="breadcrumb-item"><a href="Sci12Economics.php">Economics</a></li>
   
  </ol>
  <style>
    .breadcrumb{
      display: flex;
      margin-left: auto;
      margin-right: auto;
      width: 60%;
    }
  </style><hr>
<h3 style="text-align:center">Science class-12th (Electronics)</h3><hr>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       Notes & Reference Books
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <code>
          <div class="container">
        <main class="Maincontents">
          <h6 style="text-align: center;">Notes</h6>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
    <article class="content">
    
      <span class="listing">Notes 1</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Notes 2</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Notes 3</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Notes 4</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
        </div>
        <hr>
        <h6 style="text-align: center;">Reference Books</h6>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
    <article class="content">
    
      <span class="listing">Reference 1</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Reference 2</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Reference 3</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Reference 4</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
        </div>
  </main>
</div>

      </code> </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Syllabus
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> 
        <code>
        <div class="container">
        <main class="Maincontent">
          <h6 style="text-align: center;">Syllabus</h6>
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
    <article class="content">
    
      <span class="listing">Syllabus 1</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
    <div class="col">
    <article class="content">
     
      <span class="listing">Syllabus 2</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
    </div>
    </div>
   <hr> <h6 style="text-align: center;">Paper Pattern</h6><hr>
    <article class="content">
    
    <span class="listing">Paper pattern</span>
    <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
  </article>
  </main>
</div>
      </code></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
       Model Question Papers
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> <code>
      <div class="container">
        <main class="Maincontent">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
    <article class="content">
    
      <span class="listing">Model 1</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Model 2</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Model 3</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">Model 4</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
        </div>
  </main>
</div>
      </code></div>
    </div>
  </div> <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Previous Year Question Papers
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <code>
        <div class="container">
        <main class="Maincontent">
        <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
    <article class="content">
    
      <span class="listing">QP 2017</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">QP 2018</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">QP 2019</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
          <div class="col">
    <article class="content">
    
      <span class="listing">QP 2020</span>
      <span class="value"><a class="btn btn-primary" href="#">click here</a></span>
    </article>
          </div>
        </div>
  </main>
</div>
      </code> </div>
    </div>
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