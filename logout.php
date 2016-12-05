<?php
/* 
session_start();
$uid=$_SESSION["uid"];

if(!isset($_SESSION['uid'])) 
	{ 
		header("Location:index.php");
		exit;
	} 

try
{
	$db = new PDO("mysql:dbname=webauth;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   

$sql="select * from student_info where email='$uid'";
foreach($db->query($sql) as $row)
*/?>
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


  <title>Pluto</title>

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
<body background="logout.jpg">

<div class="container">

  <!-- Navbar
================================================== -->

          <div class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0)"><i class="material-icons">view_quilt</i>
				  <b></b></a></li>
				  <li><a href="javascript:void(0)"><b>Pluto</b></a></li>
                </ul>	
              </div>
            </div>
          </div>
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Thank you</h3>
  </div>
  <div class="panel-body">
    You have been successfully logged out!!
	<a href="http://localhost/Pluto/index_1.php" class="alert-link">Click to login again.</a>
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
