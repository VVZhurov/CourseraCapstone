<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <script src="./assets/js/jquery-3.4.0.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img id ="mainlogo"src="./assets/img/logo.png" alt="logo">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" id="logout" href="./assets/pages/logout.html" style="display: none">logout</a>
          </li>
        <li> 
        <div class="btn-group">
  <button type="button" id ="loginbutton"class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login/Sign up
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="./login.php">Login</a>
    <a class="dropdown-item" href="./signup.php">Sign up</a>
  </div>
</div>

        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->


<!-- Slider -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('./assets/img/background1.jpeg')">
        <div class="carousel-caption  d-flex h-100 align-items-center justify-content-center ">
          <h3 class="display-4">Welcome in my chat app</h3>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('./assets/img/background2.jpeg')">
        <div class="carousel-caption  d-flex h-100 align-items-center justify-content-center">
          <h3 class="display-4">Enjoy my service </h3>
        </div>
      </div>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</div>


<!-- Footer -->
<footer class="page-footer font-small blue pt-4">


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:  Luciano Gavoni for Coursera Capstone project 
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>


<?php
session_start();
if(isset($_SESSION[`name`])){
  header('Location: ./home.php');
}
?>