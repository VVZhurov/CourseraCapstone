<?php
session_start();
if(isset($_SESSION[`name`])){
header('Location: ./home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
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

      <form type="form" action="management.php" method="POST">
      <fieldset>
        <center><h2>LOG IN</h2></center>

        <div class="alert alert-danger" role="alert" id="errorMessage" style=" display: none"></div><br>
        <hr class="colorgraph">
        <div class="form-group">
                    <label class="text-center">username</label>
                    <input type="text" id="user" name="user" maxlength="20" class="form-control input-lg" placeholder="Fill-in your username">
        </div>
        <div class="form-group">
          <label class="text-center">Password</label>
                    <input type="password" id="pass" name="pass" maxlength="20" class="form-control input-lg" placeholder="Fill-in your password">
        </div>
        <hr class="colorgraph">
        <div class="row d-flex flex-row justify-content-center my-flex-container">
          <div class="col-xs-6 col-sm-6 col-md-6 my-flex-item">
            <button type="submit" value="Log in" id="btn" name="login" class="btn btn-lg btn-success btn-block">LOGIN</button>
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
</body>
</html>




