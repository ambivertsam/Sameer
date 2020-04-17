<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style type="text/css">
   .header
   {
   background-color:#202020;
  color: white;
  margin: 50px;
  padding: 50px;
}
 </style>
</head>
<body style="background-color:#34495e">
	<div class="header">
<h1 align="center">Welcome to Student Management System</h1>
<h3 align="right" style="margin-right: 20px">
	<a href="login.php">Admin Login</a></h3>
</div>

	<form method="post" action="index.php">
		<table style="width:50%;" align="center" border="1">
			<tr>
				<td colspan="2" align="center">Student Information</td>
			</tr>
			<tr>
			<td align="left">Choose Semester</td>
			<td><Select name="sem">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
			</Select>
		</td>
		</tr>
		<tr>
			<td align="left">Enter USN</td>
			<td><input type="text" name="usn" required="required"></td>
		</tr>
		<tr>
			<td colspan="1" align="center"></td>
			<td>
				<input type="submit" name="submit" value="Show Information"></td>

		</tr>
		</table>
		
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$sem=$_POST['sem'];
$usn=$_POST['usn'];
include('dbcon.php');
include('function.php');
showdetails($sem,$usn);
}
?>