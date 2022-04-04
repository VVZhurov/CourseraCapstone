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
        

      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->


<div class="container justify-content-center" >

<div class="row " style="margin-top:40px;justify-content: center;">

    <div class="col-xs-12 col-md-6 align-items-center">


      <form class="form" action="register.php" method="POST">
      <fieldset>
        <center><h2>Sign up</h2></center>

        


        <div class="form-group">
          <label class="text-center">Username</label>
          <input type="text" id="newuser" name="newuser" maxlength="20" class="form-control input-lg" placeholder="insert your username">
        </div>

        <div class="form-group">
                    <label class="text-center">Password</label>
                    <input type="password" id="newpass" name="newpass" class="form-control input-lg" placeholder="fill in your password">
        </div>
        <div class="form-group">
                    <label class="text-center">Repeat password</label>
                    <input type="password" id="newpass" name="cnewpass" maxlength="20" class="form-control input-lg" placeholder="fill in your password">
        </div>


        <hr class="colorgraph">
        <div class="row d-flex justify-content-center">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <button  type="submit" value="Signup" id="signup" name="signup" class="btn btn-lg btn-success btn-block">SIGN UP</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
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

<script src="./assets/js/global.js"></script>
</body>
</html>

<?php
session_start();
if(isset($_SESSION[`name`])){
//echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}

?>