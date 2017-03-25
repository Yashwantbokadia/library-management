<?php
include 'dbinfo.php'; 
?>  
<?php
//always start the session before anything else!!!!!! 
session_start(); 
//connect to the db 
$username = $_SESSION['username'];
?> 

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
<body>
<h1>Future Hold Request for a Book</h1>

<form action="FutureHoldRequestResult.php" method="post">
<table>
<tr>
    <td>ISBN</td>
    <td><input type="text" class="button" name="isbn" required/></td>
</tr>
</table>
<input type="submit" class="btn" value="Request"/>
</form>

<form action="UserSummary.php" method="post">
<input type="submit" class="btn" value="Back"/>
</form>


</body>
</html>