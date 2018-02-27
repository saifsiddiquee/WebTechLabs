<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>User info</title>
</head>
<body>
	<h1 align="center">User Info</h1><hr><br>
	        <button type="button" value="Logout" style="float: right;"><a href="logoutaction.php">Logout</button>
	        <button type="button" value="" style="float: right;"><a href="home.php">Home</a></button><br><br>
		<form>
			<?php
				session_start();
				if(empty($_SESSION["username"]))
					header("location:index.php");
			?>
	    	<table border=".5px" align="center" style="width:80%">
	    		<tr>
	    			<th>SL.</th>
	    			<th>Full name</th>
	    			<th>Phone</th>
	    			<th>Email</th>
	    		</tr>
	    		<tr align="center">
	    			<td>1.</td>
			  		<td><?php echo $_SESSION["fullName"] ?></td>
				    <td><?php echo $_SESSION["phone"]?></td>
				    <td><?php echo $_SESSION["email"]?></td>
				</tr>
	    	</table>
		</form>
</body>
</html>
