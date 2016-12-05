<?php
session_start();
$emp_id=$_SESSION['emp_id'];


if(!isset($_SESSION['emp_id'])) 
	{ 
		header("Location:http://localhost/Pluto/index_1.php");
		exit;
	} 

try
{
	$db = new PDO("mysql:dbname=leave_management;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   
?>
<!DOCTYPE html>

<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>Admin</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">


  <link href="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body background="abc.jpg">

<div class="container">

  <!-- Navbar
================================================== -->
 <div class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0)"><i class="material-icons">fingerprint</i>
				  <b></b></a></li>
				  <li><a href="http://localhost/Pluto/admin_record.php"><b>Admin</b></a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons md-48"><i class="material-icons">account_circle</i></i>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li><a href="http://localhost/Pluto/admin_record.php"><i class="material-icons">home</i></i> Employee Records</a></li>
                    <li><a href="http://localhost/Pluto/admin_leave_log.php"><i class="material-icons">assignment</i></i> Leave Log</a></li>
					 <li class="divider"></li>
                      <li><a href="http://localhost/Pluto/PHP/Logout.php"><i class="material-icons">power_settings_new</i> LOG OUT</a></li>
                    </ul>
                  </li>
                </ul>
				
              </div>
            </div>
          </div>

  <!-- Forms
================================================== -->
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>

    <div class="row">
      <div >
        <div class="well bs-component">
            <fieldset>
            <legend>Leave History</legend>
			  
			<table class="table table-striped table-hover ">
			<thead>
			<tr>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Casual Leave</th>
			<th>Earn Leave</th>
			<th>Sick Leave</th>
			<th>Maternity Leave</th>
			<th>Child Care Leave</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<?php 
				$sql = "SELECT allocated_leave.emp_id,name,cl,el,sl,ml,ccl from allocated_leave,emp_table where emp_table.emp_id=allocated_leave.emp_id";
				$key=0;
				foreach($db->query($sql) as $row){
				$key++;?>
				
			<td><?php echo$row['emp_id'];?></td>
			<td><?php echo$row['name'];?></td>
			<td><?php echo$row['cl'];?></td>
			<td><?php echo$row['el'];?></td>
			<td><?php echo$row['sl'];?></td>
			<td><?php echo$row['ml'];?></td>
			<td><?php echo$row['ccl'];?></td>
<td><a href="http://localhost/Pluto/PHP/admin_allocated_leave_update.php?emp_id=<?php echo $row['emp_id'];?>" class="btn btn-danger"> Reset</a></td>
			</tr>
			
				<?php }?>
			</tbody>
			</table>
			
			
              
			</fieldset>
          
        </div>
      </div>
      
    </div>
  </div>    
</div>
   
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="dist/js/ripples.min.js"></script>
<script src="dist/js/material.min.js"></script>
<script src="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
</body>
</html>
