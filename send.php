
<?php
session_start();
$key= md5('Coursera2020!');
function encrypt($plaintext, $password) {
    $method = "AES-256-CBC";
    $key = hash('sha256', $password, true);
    $iv = openssl_random_pseudo_bytes(16);

    $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
    $hash = hash_hmac('sha256', $ciphertext . $iv, $key, true);

    return $iv . $hash . $ciphertext;
}

$db_name = "chat";
$mysql_username = "luciano";
$mysql_password = "Luga1996";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$mess=encrypt(filter_var($_POST['content'],FILTER_SANITIZE_STRING),$key);
	 $sql =$conn->prepare("SELECT * FROM `users` WHERE username =?");
	 $sql->bind_param("s",$_POST['touser']);
	 $sql->execute();
	 $sql->store_result();
	 $query = "SELECT * FROM `users`";
	 $result2 = mysqli_query($conn, $query);

	$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
if (isset($_POST['content'])&& ISSET($_POST['touser'])&&$sql->num_rows == 1&&$_POST['touser']!=$_SESSION[`name`])

	{
		$sqli = $conn->prepare("INSERT INTO `messages` ( `sender`, `reciever`,`message`) VALUES ( ?, ?,?)");
		$sqli->bind_param("sss",$_SESSION[`name`],$_POST['touser'],$mess);
		$sqli->execute();
//	echo "<script type='text/javascript'>window.location.href = 'confirm.php';</script>";
		header('Location: ./confirm.php');
	}

//else echo"Error sending the message "



?>
<?php
session_start();
if(!isset($_SESSION[`name`]))
{
	header('Location: ./login.php');
	
}

?>


</html>
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
              <a class="nav-link" id="logout" href="./logout.php">logout</a>
          </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->

<br><br>
<center><h1>Send a message</h1>
<br><br>

<form action="" method="POST">
	<p>
		<label>to (Username:)</label>
		
        <select name="touser">
            <?php echo $options;?>
        </select>

	
	</p>
	<p>
		<label>content:</label><br>
		<textarea id="content" name="content"></textarea>
	
	</p>
	<div class="row d-flex flex-row justify-content-center my-flex-container">
          <div class="col-xs-6 col-sm-6 col-md-6 my-flex-item">
            <button type="submit" value="Send" id="btn" name="Send" class="btn btn-lg btn-dark btn-block">Send</button>
          </div>
</div>
</form>
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
