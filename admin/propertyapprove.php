<?php
include("config.php");
$pid = $_GET['id'];
$sql = "UPDATE property SET status = 1 WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Property Approved</p>";
	header("Location:propertyview.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Property Not Approved</p>";
	header("Location:propertyview.php?msg=$msg");
}
mysqli_close($con);
?>  
