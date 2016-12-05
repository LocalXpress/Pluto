<?php
try {
    $db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
    echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
	
	session_start();
	$emp_id=$_SESSION['emp_id'];
	$ltype=$_POST['ltype'];
	$date1=date_create($_POST['start_date']);
	$date2=date_create($_POST['end_date']);
	$diff=date_diff($date1,$date2,false);
	$diff->format("%R%a days");
	$date_now=date("Y-m-d");
	
	
if(($ltype=="cl"&&$diff->format("%R%a days")>14)||($ltype=="el"&&$diff->format("%R%a days")>30)||($ltype=="sl"&&$diff->format("%R%a days")>15)||($ltype=="ml"&&$diff->format("%R%a days")>180)||($ltype=="ccl"&&$diff->format("%R%a days")>730))
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
}
else
{	
	$sql = $db->prepare("INSERT INTO leave_log VALUES(NULL,:emp_id, :ltype, :date_now,:start_date,:end_date,:days,:status)");
		$sql->execute(array(
		"emp_id" =>$emp_id,
		"ltype"=>$ltype,
		"date_now"=>$date_now,
		"start_date"=>$_POST['start_date'],
		"end_date"=>$_POST['end_date'],
		"days"=>$diff->format("%R%a days"),
		"status"=>"Pending"));
	
		header("location:http://localhost/Pluto/staff_leave_history.php");
}	
?>