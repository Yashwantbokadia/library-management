<?php
include 'dbinfo.php'; 
?>  

<html>
<head>
<link rel= "stylesheet" type ="text/css" href="style.css">
</head>
<body>
<div class="container">
<h1>Login</h1>

<?php
//always start the session before anything else!!!!!! 
session_start(); 

if(isset($_POST['username']) and isset($_POST['password']))  { //check null
	$username = $_POST['username']; // text field for username 
	$password = $_POST['password'];
	$role = $_POST['role']; // text field for password
	
// store session data
$_SESSION['username']=$username;

//connect to the db 

$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

         			
           $sql_query = "Select Username From user Where Username = '$username' AND Password = '$password' AND role = '$role'";  

            //Run our sql query
           $result = mysqli_query ($link, $sql_query)  or die(mysqli_error($link));  
			if($result == false)
				{
				echo 'The query failed.';
				exit();
			}

			//this is where the actual verification happens 
			if(mysqli_num_rows($result) == 1){ 
			//the username and password matches the database 
			//move them to the page to which they need to go
			if($role == "admin") 
				header('Location: adminPage.php');
			elseif($role == "student")
				header('Location: studentPage.php');
			   
			}
			elseif($role == "librarian"){
				header('Location: memberPage.php');
			   
			}else{ 
			$err = 'Incorrect username or password' ; 
			} 
			//then just above your login form or where ever you want the error to be displayed you just put in 
			echo mysqli_error();
    } 
	
?>	

<form action="" method="post">
<table>
<tr>
    <td>Username</td>
    <td><input type="text" class="btn" name="username" required/></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="text" class="btn" name="password" required/></td>
</tr>
<tr>
    <td>Select Role:</td>
    <td><input type="radio" name="role" value="student">Student</td>
    <td><input type="radio" name="role" value="admin">Admin</td>
    <td><input type="radio" name="role" value="librarian">Librarian</td>
</tr>	
</table>
<input type="Submit" class="btn" value="Login"/>
</form>
<form action="NewUserRegistration.php" method="post">
</form>
</div>
</body>
</html>