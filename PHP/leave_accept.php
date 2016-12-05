<?php
$leave_id=$_POST['leave_id'];
$status=$_POST['status'];
$emp_id=$_POST['emp_id'];
$ltype=$_POST['ltype'];

try {
    $db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
    //echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
		$sql = $db->prepare("UPDATE `leave_log` SET `status` = :status WHERE `leave_log`.`leave_id` = $leave_id");
		$sql->execute(array(
		"status"=>$status));
		
		if($status=="Accepted")
		{
			$sql="select * from leave_log where leave_id='$leave_id'";
			foreach($db->query($sql) as $row)
			$days=$row['days'];
			
			if($ltype=="cl")
			{
				$sql="select * from allocated_leave where emp_id='$emp_id'";
				foreach($db->query($sql) as $row)
				$left=$row['cl'];
				
				$cl=$left-$days;
				
				$sql = $db->prepare("UPDATE allocated_leave SET `cl` = :cl WHERE emp_id='$emp_id'");
				$sql->execute(array(
				"cl"=>$cl));
			}
			else if($ltype=="el")
			{
				$sql="select * from allocated_leave where emp_id='$emp_id'";
				foreach($db->query($sql) as $row)
				$left=$row['el'];
				
				$cl=$left-$days;
				
				$sql = $db->prepare("UPDATE allocated_leave SET `el` = :cl WHERE emp_id='$emp_id'");
				$sql->execute(array(
				"cl"=>$cl));
			}
			else if($ltype=="sl")
			{
				$sql="select * from allocated_leave where emp_id='$emp_id'";
				foreach($db->query($sql) as $row)
				$left=$row['sl'];
				
				$cl=$left-$days;
				
				$sql = $db->prepare("UPDATE allocated_leave SET `sl` = :cl WHERE emp_id='$emp_id'");
				$sql->execute(array(
				"cl"=>$cl));
			}
			else if($ltype=="ml")
			{
				$sql="select * from allocated_leave where emp_id='$emp_id'";
				foreach($db->query($sql) as $row)
				$left=$row['ml'];
				
				$cl=$left-$days;
				
				$sql = $db->prepare("UPDATE allocated_leave SET `ml` = :cl WHERE emp_id='$emp_id'");
				$sql->execute(array(
				"cl"=>$cl));
			}
			else
			{
				$sql="select * from allocated_leave where emp_id='$emp_id'";
				foreach($db->query($sql) as $row)
				$left=$row['ccl'];
				
				$cl=$left-$days;
				
				$sql = $db->prepare("UPDATE allocated_leave SET `ccl` = :cl WHERE emp_id='$emp_id'");
				$sql->execute(array(
				"cl"=>$cl));
			}
			
			
		}

		
		header("location:http://localhost/Pluto/hod_leave_log.php");
?>