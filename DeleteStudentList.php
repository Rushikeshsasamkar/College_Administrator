<?php
include("./import/config.php");

$enrollment_id=$_GET['enrollment_id'];
$query="DELETE FROM STUDENT_RECORD WHERE Enrollment_Id='$enrollment_id'";
$data=mysqli_query($connection,$query);
	
if($data){
	?><script>alert('Record Deleted');</script>";
	
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/linked%20project/Index.php">
	<?php
}
else
{
	echo "<font color ='red'>Sorry,DELETE Process Failed";
}
?>

