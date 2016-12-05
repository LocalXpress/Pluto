<?php
session_start();

try {
    $db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
    echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
	if($_POST['password_1']==$_POST['password_2'])
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password_1'];
		$dept=$_POST['dept'];
		$type=$_POST['type'];
		
		$sql = $db->prepare("INSERT INTO emp_table VALUES(NULL,:name, :email, :dept,:type,:password)");
		$sql->execute(array(
		"name" => $name,
		"email" => $email,
		"dept" => $dept,
		"type"=>$type,
		"password"=>$password));
		
		
		
		$sql="select * from emp_table where email='$email'";
		foreach($db->query($sql) as $row)
		{$_SESSION['emp_id']=$row['emp_id'];
		$emp_id=$_SESSION['emp_id'];
		
		$sql = $db->prepare("insert into allocated_leave (emp_id) value (:emp_id)");
		$sql->execute(array(
		":emp_id" => $_SESSION['emp_id']));
		}
		
		$sql="select * from emp_table where emp_id='$emp_id'";
		foreach($db->query($sql) as $row)
		$key++;
		
		if($key!=0&&$row['type']=="staff")
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
		
	}
	else
		header("location:http://localhost/Pluto/index_1.php");
	
	
?>