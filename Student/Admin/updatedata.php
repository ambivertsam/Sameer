<?php
include('../dbcon.php');
$usn=$_POST['usn'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$sem=$_POST['sem'];
$id=$_POST['sid'];
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname, "../dataimg/$imagename");

$qry="
UPDATE `student` SET `usn` ='$usn',`Name` = '$name', `city` = '$city', `Pcont` = '$pcon', `sem` = '$sem',`image`=
'$imagename' WHERE `student`.`id` = '$id' ";

$run=mysqli_query($con,$qry);
if($run==true)
{
	?>
	<script>
		alert('Data inserted successfully');
		window.open('updateform.php?sid=<?php echo $id;?>','_self')
	</script>
	<?php
}
?>
