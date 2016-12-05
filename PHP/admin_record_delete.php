<?php
$emp_id=$_GET['emp_id'];


try
{
	$db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   

$sql="delete from emp_table where emp_id=$emp_id";
$db->query($sql);
header("location:http://localhost/Pluto/admin_record.php");

?>
