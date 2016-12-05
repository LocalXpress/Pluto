<?php
$emp_id=$_GET['emp_id'];
echo $emp_id;
try
{
	$db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
} 
$sql = $db->prepare("UPDATE allocated_leave set cl=14,el=30,sl=15,ml=180,ccl=730 where emp_id=$emp_id");
header("location:http://localhost/Pluto/admin_allocated_leave.php");
?>