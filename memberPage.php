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
<h1>Librarian Panel</h1>

<form action="SearchBooks.php" method="post">
<input type="submit" class="button button1" value="Search Books"/>
</form>

<form action="TrackBookLocation.php" method="post">
<input type="submit" class="button button1" value="Track Book Location"/>
</form>

<form action="BookCheckout.php" method="post">
<input type="submit" class="button button1" value="Checkout Book"/>
</form>

<form action="FutureHoldRequestforaBook.php" method="post">
<input type="submit" class="button button1" value="Future Hold Request"/>
</form>

<form action="ReturnBook.php" method="post">
<input type="submit" class="button button1" value="Return Book"/>
</form>

<form action="Login.php" method="post">
<input type="submit" class="button button1" value="Close"/>
</form>
</body>
</html>