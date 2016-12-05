<?php
session_start();

        $password=$_POST['password'];
		$emp_id=$_POST['emp_id'];



try
{
	$db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   
	$key=0;
	$sql="select * from emp_table where emp_id='$emp_id' and password='$password'";
	foreach($db->query($sql) as $row)
	$key++;

	
	if($emp_id=="admin@rcciit"&&$password="mychemicalromance")
	{
			$_SESSION["emp_id"]="Admin";
			header("location:http://localhost/Pluto/admin_record.php");
	}
	else if($key!=0&&$row['type']=="staff")
		{	$_SESSION["emp_id"]=$emp_id;
			header("location:http://localhost/Pluto/staff_home.php");
		}
	else if($key!=0&&$row['type']=="hod")
		{	$_SESSION["emp_id"]=$emp_id;
			header("location:http://localhost/Pluto/hod_home.php");
		}
	else if($key!=0&&$row['type']=="principal")
		{	$_SESSION["emp_id"]=$emp_id;
			header("location:http://localhost/Pluto/principal_home.php");
		}
	else
		header("location:http://localhost/Pluto/index_error.php");
	
	
?>