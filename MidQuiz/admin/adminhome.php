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
    <title>Teacher||Home</title>
</head>
<body>
	<?php
	    session_start();
	    if(!isset($_SESSION['t_email']))
	    {
	        header("Location: index.php");
	        exit();
	    }
    ?>
	<div class="container">
		<div class="panel panel-primary">
	      <div class="panel-heading">Teacher</div>
	      <div class="panel-body">
	      	<form class="col-sm-6 col-sm-offset-3" action="" method="POST">
				<fieldset>
					<button type="button" name="Quiz" class="btn btn-default"><a style="text-decoration: none" href="quiz.php">Create Quiz</a></button>
					<button type="button" value="Logout" class="btn btn-warning"><a style="text-decoration: none" href="adminlogoutaction.php">Logout</a></button>
				</fieldset>
			</form>
	      </div>
	    </div>
    </div>
</body>
</html>