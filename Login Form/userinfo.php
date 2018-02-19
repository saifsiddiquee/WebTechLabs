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
	    	<table border=".5px" align="center" style="width:80%">
	    		<tr>
	    			<th>SL.</th>
	    			<th>Full name</th>
	    			<th>Phone</th>
	    			<th>Email</th>
	    		</tr>
	    		<tr>
	    			<td>1</td>
	    			<td>d</td>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    		<tr>
	    			<td>2</td>
	    			<td></td>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    	</table>
		</form>
</body>
</html>

<?php
	session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
?>