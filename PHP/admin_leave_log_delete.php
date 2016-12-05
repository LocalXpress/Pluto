<?php
$leave_id=$_GET['emp_id'];
echo $leave_id;

try
{
	$db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
} 
$sql="delete from leave_log where leave_id=$leave_id";
$db->query($sql);
header("location:http://localhost/Pluto/admin_leave_log.php");
?>