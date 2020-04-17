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
?>
<table align="center">
	<form action="updatestudent.php" method="POST">
		<tr>
			<th>Enter Semester</th>
			<td><input type="number" name='sem' placeholder="Enter Semester" required></td>
			<th>Enter Name</th>
			<td><input type="text" name='name' placeholder="Enter Name" required></td>
			<td colspan="2"><input type="submit" name="submit" value="search"></td>
        </tr>
    </form>
</table>

<table align="center" width="80%" border="1" style="margin-top: 10px">
	<tr style="background-color:#000;color:#fff">
		<th>index</th>
		<th>image</th>
		<th>Name</th>
		<th>Usn</th>
		<th>Edit</th>
	</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$sem=$_POST['sem'];
	$name=$_POST['name'];
	$qry="SELECT * FROM `student` WHERE `sem`='$sem' AND `Name`LIKE '%$name%'";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
		echo"<tr><td colspan='5'>No records found</td></tr>";

	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
          ?>
         <tr align="center">
         	     <td><?php echo $count;?></td>
         	     <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;"/></td>
         	     <td><?php echo $data['Name'];?></td>
         	     <td><?php echo $data['usn'];?></td>
         	<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
         </tr> 
         <?php
		}
	}
}
?>
</table>
