<?php
	$errMsg="";
	if (isset($_POST['submit']))
        {
                $email = $_POST['em'];
                $pass = $_POST['pass'];
                $file = file_get_contents("log.txt");

        if(!strstr($file, "$email||$pass"))
        {
            $errMsg = "*Invalid email or password";
        }
     	else if (empty($email))
         {
            $errMsg = "email can not be empty";
         }

        else
        {
            session_start();
            $_SESSION['t_email'] = $email;
            $_SESSION['t_password']  = $pass;
            header("Location: adminhome.php");
            exit();
        }
        }
?>
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
    <title>Index</title>
</head>
<body>
    <div class="container">
      	<div class="row">
      		<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-info">
                      <div class="panel-heading">Sign In</div>
						<div class="panel-body">

							<form role="form" action="" method="post">
								<div class="form-group">
								  	<label for="email">Email:</label>
								  	<input type="email" class="form-control" name="em" id="email" placeholder="Enter email" >
								</div>

								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  	<label class="col-md-3 control-label" for="errMsg"></label>
									<span class="alert-danger"><?php echo $errMsg;?></span>
								</div>	
								<button type="submit" name="submit" class="btn btn-default">Submit</button>
								<label>OR</label>
								<button type="button" class="btn btn-default"> <a style="text-decoration: none;" href="adminregister.php">Sign Up</a></button>
						  </form>
						</div>
				</div>
			</div>
	</div>
</div>
</body>
</html>