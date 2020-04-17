<?php
 function showdetails($sem,$usn)
{
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `usn`='$usn' AND `sem`='$sem'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
    $data=mysqli_fetch_assoc($run);
    ?>
    <table border="1" style="width:50%;margin-top:20px" align="center">
    	<tr>
    		<th colspan="3">Student Details</th>
    	</tr>
    	<tr>
    <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px;max-width: 120px;"/></td>
    		<th>Usn</th>
    		<td><?php echo $data['usn'];?></td>
    		<tr>
    			<th>Name</th>
    			<td><?php echo $data['Name'];?></td>
    		</tr>
    		<tr>
    			<th>Semester</th>
    			<td><?php echo $data['sem'];?></td>
    		</tr>
    		<tr>
    			<th>Parent Contact Number</th>
    			<td><?php echo $data['Pcont'];?></td>
    		</tr>
    		<tr>
    			<th>City</th>
    			<td><?php echo $data['city'];?></td>
    		</tr>
    	</tr>
    </table>
    <?php
	}
	else
	{
		echo"<script>alert('No student found.');</script>";
	}
}

?>
