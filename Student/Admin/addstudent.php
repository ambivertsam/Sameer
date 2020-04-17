<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo " ";
}
else
{
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%"; margin-top:40px;">
	<tr>
	<th>USN</th>
	<td><input type="text" name="usn" placeholder="Enter usn" required></td>
	</tr>
    <tr>
	<th>FULL NAME</th>
	<td><input type="text" name="name" placeholder="Enter name" required></td>
	</tr> 
    <tr>
	<th>CITY</th>
	<td><input type="text" name="city" placeholder="Enter city" required></td>
	</tr> 
    <tr>
	<th>PARENT CONTACT NUMBER</th>
	<td><input type="text" name="pcon" placeholder="Enter Parent contact number" required></td>
	</tr> 
	<tr>
	<th>SEMESTER</th>
	<td><input type="number" name="sem" placeholder="Enter Semester" required></td>
	</tr> 
	<tr>
	<th>IMAGE</th>
	<td><input type="file" name="simg" required></td>
	</tr>
	<tr> 
	<td colspan="2" align
	<?php
	?>="center"><input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>
</body>
<?php
if(isset($_POST['submit']))
{
 include('../dbcon.php');
$usn=$_POST['usn'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$sem=$_POST['sem'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname, "../dataimg/$imagename");

$qry="INSERT INTO `student`(`usn`, `Name`, `city`, `Pcont`, `sem`,`image`) VALUES ('$usn','$name','$city','$pcon','$sem','$imagename')";
$run=mysqli_query($con,$qry);
if($run==true)
{
	?>
	<script>
		alert('Data inserted successfully');
	</script>
	<?php
}
}

