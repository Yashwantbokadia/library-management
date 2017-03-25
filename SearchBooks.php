<html>
<head>
	<link rel= "stylesheet" type ="text/css" href="style.css">
	 <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
</head>
<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
?> 
<body>
<h1>SearchBooks</h1>

<form action="HoldRequestforaBook.php" method="post">
<table>
<tr>
    <td>ISBN</td>
    <td><input type="text" class="button" name="isbn"/></td>
</tr>

<tr>
    <td>Title</td>
    <td><input type="text" class="button" name="title"/></td>
</tr>


<tr>
    <td>Author</td>
    <td><input type="text" class="button" name="author"/></td>
</tr>

</table>
<input type="submit" class="btn" value="Search"/>

</form>

<form action="UserSummary.php" method="post">
<input type="submit" class="btn" value="Back"/>
</form>

<form action="Login.php" method="post">
<input type="submit" class="btn" value="Close"/>
</form>

</body>
</html>