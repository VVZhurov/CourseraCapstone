<!DOCTYPE html>
<html lang="en">
<head>
  <title>after login</title>
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
    <a class="navbar-brand" href="./index.php">
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
</div>

        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->


<center><h1>Registration has been confirmed</h1></pre>
<h2>You may now</h2> <a href="login.php"><h2>login</h2></a>
</center>



<!-- Footer -->
<footer class="page-footer font-small blue pt-4">


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:  Luciano Gavoni for Coursera Capstone project 
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<script src="./assets/js/global.js"></script>
</body>
</html>





<?php
session_start();
if(isset($_SESSION[`name`])){
header('Location: ./home.php');
}
?>