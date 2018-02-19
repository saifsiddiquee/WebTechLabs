<?php

	$user = validate($_POST['user']);
	$pass = validate($_POST['pass']);
	$repass = validate($_POST['repass']);
	$email = validate($_POST['email']);
	$fname = validate($_POST['fname']);

	function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

	$myArray = array('UserName' => $user, 'Password' => $pass, 'Repassword' => $repass, 'E-mail' => $email, 'FullName' => $fname);
	//$data = implode('<br', $myArray);

	print_r($myArray);

	// *********Testing*************
	// echo $user."<br>";
	// echo $pass."<br>";
	// echo $repass."<br>";
	// echo $email."<br>";
	// echo $fname."<br>";
?>