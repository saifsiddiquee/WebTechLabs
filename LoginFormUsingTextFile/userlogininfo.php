<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>User info</title>
    </style>
</head>
<body>
	<?php
	session_start();
    if(!isset($_SESSION['username'],$_SESSION['password'])){
        header("Location: index.php");
        exit();
    }
?>
	<h1 align="center">User login info info</h1><hr><br>
	        <button type="button" value="Logout" style="float: right;"><a href="logoutaction.php">Logout</button>
	        <button type="button" value="" style="float: right;"><a href="home.php">Home</a></button><br><br>
		<form>
	    	<table border=".5px" align="center" style="width:100%" >
	    		<tr align="center">
	    			<th>SL.</th>
	    			<th>User name</th>
	    			<th>Password</th>
	    		</tr>
	    		<tr align="center">
	    			<td>1</td>
	    			<td><?php echo $_SESSION['username'];?></td>
	    			<td><?php echo $_SESSION['password'];?></td>
	    		</tr>
	    		<tr align="center">
	    			<td>2</td>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    	</table>
	</form>
</body>
</html>