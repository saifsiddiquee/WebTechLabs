<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Signup</title>
</head>
<body>
	<div align="center">
		<form action="signupaction.php" method="POST">
			<fieldset align="center" style="width: 30%">
				<h1 align="center" style="color:blue;">Signup form</h1><hr>
				<button type="button" value="" style="float: right;"><a href="index.php">Login</a></button><br><br>
				<table>
					<tr>
		                <td>First Name:</td>
				        <td><input type="text"  name="firstname" value="" ></td>
		            </tr>
		            <tr>
		                <td>Last Name:</td>
				        <td><input type="text"  name="lastname" value="" required=""></td>
		            </tr>
		            <tr>
		                <td>Email:</td>
				        <td><input type="text"  name="em" value="" ></td>
		            </tr>
		            <tr>
		                <td>Password:</td>
		                <td><input type="Password" name="pass" value="" ></td>
		            </tr>
		            <tr>
		                <td>Confirm Password:</td>
		                <td><input type="Password" name="cpass" value="" ></td>
		            </tr>
		            <tr>
		                <td></td>
		                <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
		            </tr>
				</table>
			</fieldset>
		</form>
	</div>

</body>
</html>