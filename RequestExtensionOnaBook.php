<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
?> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Request Extension On a Book</h1>

<form action="ExtensionResult.php" method="post">
<table>
<tr>
    <td>Enter your issue ID</td>
    <td><input type="text" class="btn" name="issueid" required/></td>
</tr>
</table>

<input type="submit" class="btn" value="submit"/>

</form>
<form action="UserSummary.php" method="post">
<input type="submit" class="btn" value="Back"/>
</form>
</body>
</html>