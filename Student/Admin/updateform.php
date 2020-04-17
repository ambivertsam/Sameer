<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo"";
}
else
{
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="POST" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 70%"; margin-top:40px;">
	<tr>
	<th>USN</th>
	<td><input type="text" name="usn" value=<?php echo $data['usn']; ?> required></td>
	</tr>
    <tr>
	<th>FULL NAME</th>
	<td><input type="text" name="name" value=<?php echo $data['Name']; ?> required></td>
	</tr> 
    <tr>
	<th>CITY</th>
	<td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
	</tr> 
    <tr>
	<th>PARENT CONTACT NUMBER</th>
	<td><input type="text" name="pcon" value=<?php echo $data['Pcont']; ?> required></td>
	</tr> 
	<tr>
	<th>SEMESTER</th>
	<td><input type="number" name="sem" value=<?php echo $data['sem']; ?> required></td>
	</tr> 
	<tr>
	<th>IMAGE</th>
	<td><input type="file" name="simg"></td>
	</tr>
	<tr> 
	<td colspan="2" align="center">
		<input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
	    <input type="submit" name="submit" value="submit"></td>
    </tr>
</table>
</form>
