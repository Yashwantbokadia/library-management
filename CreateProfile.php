<?php
include 'dbinfo.php'; 
?>  

<?php
session_start(); 
$link = mysqli_connect($host,$user,$pass) or die( "Unable to connect");
mysqli_select_db($link, $database) or die( "Unable to select database");

if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['email']))  {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$name = "$firstname $lastname";
	$email = $_POST['email'];
	$DOB = $_POST['DOB'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$isfaculty = $_POST['isfaculty'];
	$role = $_POST['role'];

	$username = $_SESSION['username'];
	
	if($isfaculty == "1") {
		$dept = $_POST['dept'];
	} else {
		$dept = null;
	}

	$insertStatement = "INSERT INTO student_faculty (Username, Name, DOB, Email, Gender, Address,
	IsFaculty, Dept) VALUES ('$username', '$name', '$DOB', '$email', '$gender', '$address', '$isfaculty',
	'$dept')";
	$sql = "UPDATE user SET `role` = '$role' WHERE Username = '$username'";
	echo $sql;
	$result = mysqli_query($link,$sql);
	mysqli_query ($link, $insertStatement)  or die(mysqli_error($link)); 
	if($result == false) {
		echo 'The query failed.'.mysql_error();
		exit();
	} else {
		header('Location: Login.php');
	}
} 


?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Create Profile</h1>

<form action="" method="post">
<table>
<tr>
    <td>First Name</td>
    <td><input type="text" class="btn" name="firstname" required/></td>
</tr>
<tr>
    <td>Last Name</td>
    <td><input type="text" class="btn" name="lastname" required/></td>
</tr>

<tr>
    <td>D.O.B</td>
    <td><input type="text" class="btn" name="DOB"/></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="text" class="btn" name="email" required/></td>
</tr>

<tr>
    <td>Address</td>
    <td><textarea name="address" class="btn" rows="5" cols="30"></textarea></td>
</tr>

</table>


<tr>
    <td>Gender</td>

</tr>


<select name="gender" class="btn">
  <option value="M">male</option>
  <option value="F">female</option>
</select>


<tr>
    <td>Are you a faculty</td>

</tr>

<table>
<select name="isfaculty" class="btn">
  <option value="1">Yes</option>
  <option value="0">no</option>
</select>
</table>


<tr>
    <td>Associate Department</td>

</tr>
</table>
<table>
<select name="dept">
  <option value="School of Electrical & Computer Engineering">Electrical Engineering</option>
  <option value="College of Computing">Computer Science</option>
  <option value="School of Industrial & Systems Engineering">Industrial & Systems Engineering</option>
</select>
<select name="role" class="btn">
  <option value="student">Student</option>
  <option value="admin">Admin</option>
  <option value="member">Member</option>
</select>
</table>


<input type="submit" class="button button1" value="submit"/>
</form>
</body>
</html>