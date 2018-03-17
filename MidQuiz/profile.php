<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/main.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<title>Profie</title>
</head>
<body>
	<?php
				session_start();
				if(empty($_SESSION["s_login"]))
				header("location:  index.php");
	?>
	<div class="container">
		<div class="panel panel-primary">
	      <div class="panel-heading">Student</div>
	      <div class="panel-body">
	      	<form class="col-sm-6 col-sm-offset-3" action="" method="POST">
	      			<a href="home.php" class="btn btn-info" role="button">Home</a>
	      			<a href="quiz.php" class="btn btn-info" role="button">Your Quiz</a>
				<button style="float: right;" type="button" value="Logout" class="btn btn-default"><a style="text-decoration: none" href="logoutaction.php">Logout</a></button><br><br>
					<div class="table-responsive">
					<table class="table" >
		        		<tr>
		        			<th>SL.</th>
		        			<th>Email</th>
		        			<th>Password</th>
		        		</tr>
		        		<tr>
		        			<td>1</td>
		        			<td><?php echo $_SESSION['s_login'] ?></td>
		        			<td><?php echo $_SESSION['s_pass'] ?></td>
		        		</tr>
		        		<tr>
		        			<td></td>
		        			<td></td>
		        			<td></td>
		        		</tr>
		        	</table>
	        	</div>
	        </form>
			</fieldset>		
	</div>
</body>
</html>