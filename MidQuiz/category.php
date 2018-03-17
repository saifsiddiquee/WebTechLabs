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
    <title>Dashboard</title>
</head>
<body>
	<?php
	    session_start();
	    if(!isset($_SESSION['s_login']))
	    {
	        header("Location: index.php");
	        exit();
    }
    ?>
<!-- 	<div align="center">
		<form>
			<fieldset style="width: 50%"><br><br>
				<a href="home.php">Home</a>
				<a href="profile.php">Profile</a>
				<a href="quiz.php">Your Quiz</a>
				<button type="button" value="Logout" style="float: right;"><a href="logoutaction.php">Logout</a></button><hr>
				<center>
					<label>You have a quiz pending!!</label><br><br><br>
					<button type="button" name="start_quiz"><a href="squiz.php"> Start Quiz</a></button><br><br>
				</center>
				<br><br>
			</fieldset>
		</form>
	</div> -->

	<div class="container">
		<div class="panel panel-primary">
	      <div class="panel-heading">Student</div>
	      <div class="panel-body">
	      	<form class="col-sm-6 col-sm-offset-3" action="" method="POST">
				<fieldset>
					<a href="home.php" class="btn btn-info" role="button">Home</a>
					<a href="profile.php" class="btn btn-info" role="button">Profile</a>
					<a href="quiz.php" class="btn btn-info" role="button">Quiz Result</a>

					<br><br>
					<?php
						if(!empty($_SESSION["s_login"]))
						{
							echo 'Hello. '. $_SESSION["s_login"];
						}
						else
						{
							header("location:index.php");
						}
				
					?>
					<br><br>
					<br>
					<a href="squiz.php" class="btn btn-primary btn-lg btn-block" role="button">Start Quiz</a><br><br>
					<button type="button" value="Logout" class="btn btn-default"><a style="text-decoration: none" href="logoutaction.php">Logout</a></button>
				</fieldset>
			</form>
	      </div>
	    </div>
    </div>
</body>
</html>