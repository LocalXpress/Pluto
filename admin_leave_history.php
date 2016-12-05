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
<body background="abc_1.jpg">

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
					<li><a href="http://localhost/Pluto/admin_record.php"><i class="material-icons">home</i></i> Employee Leave</a></li>
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
			<th>Name</th>
			<th>Leave ID</th>
			<th>Leave Type</th>
			<th>Application Date</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Days</th>
			<th>Status</th>
			</tr>
			</thead>
			<tbody>
			<?php 
				$sql = "Select leave_id,leave_log.emp_id,name,ltype,date_now,start_date,end_date,days,status from emp_table,leave_log where leave_log.emp_id=emp_table.emp_id and leave_log.emp_id=$emp_id";
				$key=0;
				foreach($db->query($sql) as $row){
				$key++;?>
			<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['leave_id'];?></td>
			<td><?php echo $row['ltype'];?></td>
			<td><?php echo $row['date_now'];?></td>
			<td><?php echo $row['start_date'];?></td>
			<td><?php echo $row['end_date'];?></td>
			<td><?php echo $row['days'];?></td>
			<td><?php echo $row['status'];?></td>
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