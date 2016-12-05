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

$sql="select * from emp_table where emp_id='$emp_id'";
foreach($db->query($sql) as $row)?>
<!DOCTYPE html>

<html>
	<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>HOD <?php echo $row['name'];?></title>

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
<body background="abc_7.jpg">

<div class="container">

  <!-- Navbar
================================================== -->

          <div class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0)"><i class="material-icons">fingerprint</i>
				  <b></b></a></li>
				  <li><a href="http://localhost/Pluto/staff_home.php"><b><?php echo $row['name'];?></b></a></li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons md-48"><i class="material-icons">account_circle</i></i>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://localhost/Pluto/hod_home.php"><i class="material-icons">assignment</i></i> Home</a></li>
					  <li><a href="http://localhost/Pluto/hod_leave_history.php"><i class="material-icons">assignment</i></i> Leave History</a></li>
					  <li><a href="http://localhost/Pluto/hod_leave_log.php"><i class="material-icons">assignment</i></i> Leave Log</a></li>
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
        <div class="page-header">
          <h1 id="forms"><font color="white">Application</font></h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div >
        <div class="well bs-component">
            <fieldset>
			<div class="alert alert-dismissible alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<a href="http://localhost/Pluto/hod_home.php" class="alert-link">Ho..<?php echo $row['name'];?>!!</a>, everything al right?
			</div>
			 
			 <p class="text-info">Application form</p>
			 
			 <form action="http://localhost/Pluto/PHP/Leave_application.php" method="post">
			 
			 <div class="form-group">
				<label for="select111" class="col-md-2 control-label">Type of Leave</label>

				<div class="col-md-10">
						<select id="select111" class="form-control" name="ltype">
						<option value="cl">Casual Leave</option>
						<option value="el">Earn Leave</option>
						<option value="sl">Sick Leave</option>
						<option value="ml">Maternity Leave</option>
						<option value="ccl">Child Care Leave</option>
						</select>
				</div>
			</div>
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Start date</label>

                <div class="col-md-10">
                  <input type="date" class="form-control"  name="start_date">
                </div>
            </div>
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">End date</label>

                <div class="col-md-10">
                  <input type="date" class="form-control" name="end_date">
                </div>
            </div>
			
			
			<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			
			 </form>
			  
		
              
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
