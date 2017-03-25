 
<?php
	include 'dbinfo.php';
	session_start(); 
	if(isset($_POST['username'])){
	$username = $_POST['username'];

	$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

	$sql = "DELETE FROM user WHERE Username = '$username'";
	$sql1 = "DELETE FROM student_faculty WHERE Username = '$username'";
	$result = mysqli_query ($link, $sql)  or die(mysqli_error($link));
	$result1 = mysqli_query ($link, $sql1)  or die(mysqli_error($link));  
			if($result == false && $result1 == false)
				{
				echo 'The query failed.';
				exit();
			}
			else{
				echo '<script>';
				echo 'alert("User deleted")';
				echo '</script>';
			}

	}
?>
<html>
<head>
	<link rel= "stylesheet" type ="text/css" href="style.css">
</head>
	<body>
		<form action = "" method = "POST">
		<input type = "text" name = "username" placeholder = "Username">
		<input type = "submit" name = ""value = "Delete">
	</form>
	</body>
</html>
