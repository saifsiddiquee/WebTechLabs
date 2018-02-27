<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Registration</title>
</head>
<body>
	<fieldset>
		<legend>Registration Form</legend>
		<table align="center">

			<form action= "registeraction.php" method="POST">
				<tr>
					<td>User Name</td><td> <input type="text" name="username" required=""></td>
				</tr>

				<tr> 
					<td>Password</td><td> <input type="password" name="password" required=""></td>
				</tr>

				<tr>
					<td>Re-type Password </td>
					<td><input type="password" name="confirmPass" required=""></td>
				</tr>

				<tr>
					<td>Email</td><td> <input type="text" name="email" required=""></td>
				</tr>

				<tr>
					<td>Phone No.</td><td> <input type="text" name="phone" required=""></td>
				</tr>
				
				<tr>
					<td>Full Name</td><td> <input type="text" name="fullName" required=""></td>
				</tr>
				<td><button type="Submit" name="registration">Submit</button></td>
				<td><button type="reset">Reset</button></td>
			</tr>
		</form>
	</table>
</fieldset>
</body>
</html>