<?php
    $errMsg = "";
	if (isset($_POST['submit']))
        {
            $email = $_POST['em'];
            $pass = $_POST['pass'];
            $file = file_get_contents("log.txt");


            if(!strstr($file, "$email||$pass"))
                {
                    $errMsg = "Invalid email or password";
                }
            else
                {
                    session_start();
                    $_SESSION['s_login'] = $email;
                    $_SESSION['s_pass']  = $pass;
                    header("Location: category.php");
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
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/main.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>
<body>
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Online Quiz!</span>
			</div>
			<div class="col-md-2 col-md-offset-4">
				<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a>
			</div>
			<!--sign in modal start-->
			<div class="modal fade" id="myModal">
				 <div class="modal-dialog">
			    <div class="modal-content title1">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
			      </div>
			      <div class="modal-body">
			        <form class="form-horizontal" action="index.php" method="POST">
			        	<fieldset>
			        		<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="email"></label>  
							  <div class="col-md-6">
							  <input id="email" name="em" placeholder="Enter your email-id" class="form-control input-md" type="email">
							  </div>
							</div>


							<!-- Password input-->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="password"></label>
							  <div class="col-md-6">
							    <input id="password" name="pass" placeholder="Enter your Password" class="form-control input-md" type="password">
							  </div>
							</div>
							<!-- error messege -->
							<div class="form-group">
							  	<label class="col-md-3 control-label" for="errMsg"></label>
								<span class="alert-danger"><?php echo $errMsg;?></span>
							</div>	
					</div>
					    <div class="modal-footer">
					       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					       <button type="submit" name="submit" class="btn btn-primary">Log in</button>
					   </div>
					</fieldset>
				</form>
			</div>
			 
			</div>
		</div>
		</div>
	</div><!--header row closed login-->

	<div class="bg">
		<div class="row">

			<div class="col-md-7"></div>
			<div class="col-md-4 panel">
			<!-- sign in form begins -->  
			  <form class="form-horizontal" name="form" action="signupaction.php" method="POST">
			<fieldset>
				<legend><b>Create a new account</b></legend>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-12 control-label" for="firstname"></label>  
				  <div class="col-md-12">
				  <input id="firstname" name="firstname" placeholder="First name" class="form-control input-md" type="text">   
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-12 control-label" for="lastname"></label>  
				  <div class="col-md-12">
				  <input id="lastname" name="lastname" placeholder="Last name" class="form-control input-md" type="text">   
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-12 control-label title1" for="email"></label>
				  <div class="col-md-12">
				    <input id="email" name="em" placeholder="Email" class="form-control input-md" type="email">
				    
				  </div>
				</div>


				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-12 control-label" for="password"></label>
				  <div class="col-md-12">
				    <input id="password" name="pass" placeholder="Enter your Password" class="form-control input-md" type="password">
				    
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-12control-label" for="cpassword"></label>
				  <div class="col-md-12">
				    <input id="cpassword" name="cpass" placeholder="Conform Password" class="form-control input-md" type="password">
				    
				  </div>
				</div>
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-12 control-label" for=""></label>
				  <div class="col-md-12"> 
				    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
				  </div>
				</div>

			</fieldset>
			</form>
			</div><!--col-md-6 end-->
		</div>
	</div>
	

</form>
</body>
</html>