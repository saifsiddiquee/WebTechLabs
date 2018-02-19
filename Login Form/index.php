<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	$userName = array();
	$password = array();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Index</title>
	</head>
	<body>
		<h1 align="center">LOG IN</h1>
		<form id="login" action="action.php" method="POST">
			<fieldset>
				<button type="submit"><a style="text-decoration: none" href="register.php">Register</a></button>
				<table align="center">
					<tr>
						<td><b>User Name :</b></td>
						<td><input type="text" name="username" value="" /></td>
					</tr>
					<tr>
						<td><b>Password:</b></td>
						<td><input type="password" name="password" value="" /></td>
					</tr>
					<tr>
						<td>
							<button type="submit" name="submit">Log In</button>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>
