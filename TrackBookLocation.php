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
<h1>Track Book Location</h1>

<form action="TrackResult.php" method="post">
<table>
<tr>
    <td>ISBN</td>
    <td><input type="text" class="button" name="isbn" required/></td>
</tr>
</table>

<input type="submit" class="btn" value="Locate"/>
</form>

<form action="UserSummary.php" method="post">
<input type="submit" class="btn" value="Back"/>
</form>


</body>
</html>