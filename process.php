<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
</html>
<?php

$user=filter_var($_POST['user'],FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
$salt= md5('Coursera2020!');
function hashword($string,$salt){
	$string = crypt($string, '$1$'.$salt.'$');
	return $string;
}
$pass=hashword($pass,$salt);
$db_name = "chat";
$mysql_username = "luciano";
$mysql_password = "Luga1996";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$statement = $conn->prepare ("SELECT * FROM `users` WHERE BINARY (username =? AND Password =?);");
if($statement)
{$statement->bind_param("ss",$user,$pass);
$statement->execute();
$statement->store_result();
if ($statement->num_rows > 0) {
 //set session
						session_start();
						$_SESSION[`name`] = $user;
						header('Location: ./home.php');
            exit;


   } else {
               // login failed save error to a session
			   echo 'Error logged in, The username or the password is not correct, Try agian please';
			   echo '<a href="login.php"><h2> Return </h2></a>';
  }

}







?>
