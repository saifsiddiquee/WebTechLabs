<?php
	session_start();
	unset($_SESSION['simple_login']);
	unset($_SESSION['pass_login']);

	session_destroy();
	header("Location: index.php");
?>