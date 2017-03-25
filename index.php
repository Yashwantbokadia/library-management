<?php
//always start the session before anything else!!!!!! 
session_start(); 

if(isset($_POST['username']) and isset($_POST['password']))  { //check null
	$username = $_POST['username']; // text field for username 
	$password = $_POST['password']; // text field for password
	
// store session data
$_SESSION['username']=$username;

//connect to the db 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'library';
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

        
			
           $sql_query = "Select * From user Where Username = '$username' AND Password = '$password'";  

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
				header('Location: UserSummary.php');
			   
			}else{ 
			$err = 'Incorrect username or password' ; 
			} 
			//then just above your login form or where ever you want the error to be displayed you just put in 
			echo "$err";
    } 
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<script type="text/javascript" src="js.js"></script>		
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
		<body>
	<form action="" method="get">
	<div>
	</div>
	<div id="header">
	<div id="header_text">

	?>			
	
	</div>
	  </div>
	<hr>
	
	<div id="center">
			<h1>

	</h1>


	<table>
    <tr>
	<td>
		Email
	</td>
	<td><input name="username" id="email"  type="text" onBlur="empty(this.id,'em','your fields is empty!')" onkeypress="insert_hidden()" onclick="insert_hidden()" onfocus="insert_login(1)" style="width:200px;" value="example_123.id@library.com" onBlur="insert_show()" style=" color:#CCCCCC" />
	</td>
	<td id="em"></td>
	  </tr>
    <tr>
    <td>
		Password	</td>
    <td><input name="password" id="password" type="password" onBlur="empty(this.id,'pass','your fields is empty!')" onfocus="insert_login(2)" style="width:200px; color:#66FF00;" /></td>
	<td id="pass"></td>
  </tr>
        
    <tr>
    <td>&nbsp;	</td>
    <td><input type="submit" value="Submit" />
		</td>
  </tr>
  
	</table>
	</fieldset>
	</div>
	<div id="boy">
	</div>

	<div id="footer">
	<div id="foot_menu">
		</div>	
	</div>
	</form>
	</body>
</html>