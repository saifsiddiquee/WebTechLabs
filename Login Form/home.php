<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
    }
?>
	<form align="center">
		<h1 align="center">HOME</h1>
		<button type="button" value="Logout" style="float: right;"><a style="text-decoration: none" href="logoutaction.php">Logout</a></button><br>
		<h3 align="center">Hello!, <?php echo $_SESSION['simple_login']; ?></h3><hr>
		<button><a style="text-decoration: none" href="userinfo.php">User Info</button>
	    <button><a style="text-decoration: none" href="userlogininfo.php"> Users Login info</button>
	</form>
</body>
</html>