
<!DOCTYPE html>

<html>
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
<body background="abc_15.jpg">

<div class="container">

  <!-- Navbar
================================================== -->

          <div class="navbar navbar-info">
            <div class="container-fluid">
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="javascript:void(0)"><i class="material-icons">view_quilt</i>
				  <b>Pluto</b></a></li>
                </ul>
              </div>
            </div>
          </div>

  <!-- Forms
================================================== -->
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong> Username or Password is incorrect, try again!
</div>
  <div class="bs-docs-section">
	<div class="row">
        <div class="well bs-component">
            <fieldset>
				
				<legend>Login Here</legend>
			<form action="http://localhost/Pluto/PHP/Login.php" method="post">
				<div class="form-group">
					<label for="inputEmail" class="col-md-2 control-label">Employee ID</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="inputEmail" placeholder="Username123" name="emp_id">
				    </div>
				</div>
			
				<div class="form-group">
					<label for="inputPassword" class="col-md-2 control-label">Password</label>
					<div class="col-md-10">
						<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
          </form>
		
			<legend>Register Here</legend>
			<form action="http://localhost/Pluto/PHP/Register.php" method="post">
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Name</label>

                <div class="col-md-10">
                  <input type="text" class="form-control" id="inputEmail" placeholder="John Doe" name="name" required>
                </div>
            </div>
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email-Id</label>

                <div class="col-md-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Something@xyz.come" name="email" required>
                </div>
            </div>
			
			
			<div class="form-group">
				<label for="select111" class="col-md-2 control-label">Department</label>

				<div class="col-md-10">
						<select id="select111" class="form-control" name="dept" required>
						<option value="IT">IT</option>
						<option value="CSE">CSE</option>
						<option value="ECE">ECE</option>
						<option value="AIEE">AIEE</option>
						<option value="EE">EE</option>
						</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="select111" class="col-md-2 control-label">Type of Employee</label>

				<div class="col-md-10">
						<select id="select111" class="form-control" name="type" required>
						<option value="staff">Staff</option>
						<option value="hod">HOD</option>
						<option value="principal">Principal</option>
						</select>
				</div>
			</div>
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Password</label>

                <div class="col-md-10">
                  <input type="password" class="form-control" id="inputEmail" name="password_1" required>
                </div>
            </div>
			
			<div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Confirm Password</label>

                <div class="col-md-10">
                  <input type="password" class="form-control" id="inputEmail" placeholder="Username123" name="password_2" required>
                </div>
            </div>
			
			<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="reset" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
			</div>
			
			</form>
			</div> 
       </div>
		  
	
			
			</fieldset>
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
