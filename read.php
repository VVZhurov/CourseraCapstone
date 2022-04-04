<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read</title>
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
              <a class="nav-link" id="logout" href="./logout.php">logout</a>
          </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->


<center><h1>Here you can find your message:</h1></center>


<script src="./assets/js/global.js"></script>
</body>
</html>
<?php
session_start();
$key= md5('Coursera2020!');
function decrypt($ivHashCiphertext, $password) {
    $method = "AES-256-CBC";
    $iv = substr($ivHashCiphertext, 0, 16);
    $hash = substr($ivHashCiphertext, 16, 32);
    $ciphertext = substr($ivHashCiphertext, 48);
    $key = hash('sha256', $password, true);
    if (!hash_equals(hash_hmac('sha256', $ciphertext . $iv, $key, true), $hash)) return null;

    return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
}
// Create connection
$db_name = "chat";
$mysql_username = "luciano";
$mysql_password = "Luga1996";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
$reciever=$_SESSION[`name`];
$result= mysqli_query($conn,"SELECT sender,message FROM `messages` where reciever='$reciever'");
while ($row = $result->fetch_assoc()) {
	echo"<p align=center> Message from ".$row['sender']." </p>";

	
	$mess=decrypt($row['message'],$key);
	echo "<p align=center>".$mess."</p>";
	echo"<br>";
		}
?>