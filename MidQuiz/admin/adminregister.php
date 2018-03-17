<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>Sign Up</title>
</head>
<body>
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-info">
				
				<div class="panel-heading">Signup Form</div>
				<div class="panel-body">
				  <form role="form" method="post" action="adminregisteraction.php">
				  	<div class="form-group">
					  <label for="name">First Name:</label>
					  <input type="text" class="form-control" name="firstname" placeholder="First Name">
					</div>
					<div class="form-group">
					  <label for="name">Last Name:</label>
					  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>;
					  <input type="email" class="form-control" name="em" placeholder="Enter email">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" name="pass" placeholder="Enter password">
					</div>
					<div class="form-group">
					  <label for="pwd">Confirm Password:</label>
					  <input type="password" class="form-control" name="cpass" placeholder="Confirm password">
					</div>
					<button type="submit" name="submit" class="btn btn-default">Submit</button>
				  </form>
			  	</div>
		  </div>
		</div>

</body>
</html>