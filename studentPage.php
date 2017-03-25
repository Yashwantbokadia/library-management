<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
unset($_SESSION['isbn']);
unset($_SESSION['copyid']);	
?> 
<html>
<head>
	<link rel= "stylesheet" type ="text/css" href="style.css">
</head>
<body>
<h1>Student Panel</h1>

<form action="SearchBooks.php" method="post">
<input type="submit" class="button button1" value="Search Books"/>
</form>


<form action="FutureHoldRequestforaBook.php" method="post">
<input type="submit" class="button button1" value="Future Hold Request"/>
</form>

<form action="RequestExtensionOnaBook.php" method="post">
<input type="submit" class="button button1" value="Extension Request"/>
</form>


<form action="Login.php" method="post">
<input type="submit" class="button button1" value="Close"/>
</form>

</body>
</html>