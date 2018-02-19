<?php

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];

	$myArray = array('UserName' => $user, 'Password' => $pass, 'Repassword' => $repass, 'E-mail' => $email, 'FullName' => $fname);
	//$data = implode('<br', $myArray);

	echo  $myArray;

	// *********Testing*************
	// echo $user."<br>";
	// echo $pass."<br>";
	// echo $repass."<br>";
	// echo $email."<br>";
	// echo $fname."<br>";


?>