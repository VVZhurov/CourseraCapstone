<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sign up Page </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
</html>
<?php
if(strlen($_POST['newpass'])<8)
{
    echo"The password is too short, It should be at least 8 characters";
   echo '<a href="signup.php"><h2> Return </h2></a>';

    exit();
}
if($_POST['newpass']!=$_POST['cnewpass']){
    echo"The two passwords does not match";
    echo '<a href="signup.php"><h2> Return </h2></a>';
    exit();
}
if (!preg_match('/[\'^£$!%&*()}{@#~?><>,|=_+¬-]/', $_POST['newpass']))
{
    // one or more of the 'special characters' found in $string
    echo"The password does not contain special characters";
    echo '<a href="signup.php"><h2> Return </h2></a>';
    exit();
}

//sanitize

$newuser=filter_var($_POST['newuser'],FILTER_SANITIZE_STRING);
$newpass=filter_var($_POST['newpass'],FILTER_SANITIZE_STRING);


$salt= md5('Coursera2020!');

function hashword($string,$salt){
	$string = crypt($string, '$1$'.$salt.'$');
	return $string;
}
if(!empty($newpass))
$newpass=hashword($newpass,$salt);
// Create connection
$db_name = "chat";
$mysql_username = "luciano";
$mysql_password = "Luga1996";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	//check if the username exists already in the database
	 $sql =$conn->prepare("SELECT * FROM `users` WHERE username=? ");
	 
	 $sql->bind_param("s",$newuser);
	 $sql->execute();
	 $sql->store_result();
	 if ($sql->num_rows == 0 && !empty($newpass) && !empty($newuser)) {
                          
			//store the new username and password in the database

			$sqli = $conn->prepare("INSERT INTO `users` ( `username`, `Password`) VALUES ( ?, ?)");
		
			$sqli->bind_param("ss",$newuser,$newpass);
			$sqli->execute();
			$sqli->store_result();
                header('Location: ./followingstep.php');
                  exit;
 } 
	else{ if(empty($newpass))
			{	echo"Please enter a password";
			    echo '<a href="signup.php"><h2> Return </h2></a>';
			}
			else if(empty($newuser))
			{	echo"Please enter a valid username";
			    echo '<a href="signup.php"><h2> Return </h2></a>';
			}
		    else {echo"This username is already used try another one, thank you";
		        echo '<a href="signup.php"><h2> Return </h2></a>';
		    }
			
			
		}



?>
