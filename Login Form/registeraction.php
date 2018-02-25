<?php
	$user = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$repass = validate($_POST['confirmPass']);
	$email = validate($_POST['email']);
	$phone = validate($_POST["phone"]);
	$fname = validate($_POST['fullName']);

	session_start();
	session_unset(); 

	$errorlist = array("nameErr" => "Name is required.<br/>", "nameFormatErr" => "Name should only Contain characterts.<br/>","emailErr" => "Email is required","emailformatErr" => "Invalid email format.<br/>","passwordErr" => "Password required.<br/>","confPasswordErr" => "Input the password again.<br/>","passwordMatchErr" => "Password doesn't match.<br/>","phoneErr" => "Phone Number is required.<br/>","invalidPhn" => "Invalid format of phone number.<br/>","fullNameErr" => "Input Your Full name.<br/>");


	$success=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$user))  
		  	{
				echo $errorlist["nameFormatErr"]; 
		  	}
		  	else
		  	{
		    	$_SESSION["username"] = $user;
		    	$success++;
		  	}

		if (empty($pass))
		{
			echo $errorlist["passwordErr"]; 
		}
		else
		{
			$_SESSION["password"] = $pass;
			$success++;
		}

		if (empty($repass)) 
		{
			echo $errorlist["confPasswordErr"]; 
		} 

		else
		{
			if($repass === $pass)
			{
				$_SESSION["confirmPass"] = $repass;
				$success++;
			}
			else
			{
				echo $errorlist["passwordMatchErr"]; 
			}
		}

		if (empty($email))
		{
			echo $errorlist["emailErr"];
		}
		else
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				echo $errorlist["emailformatErr"];
			}
			else
			{
				$_SESSION["email"] = $email;
				$success++;
			}
		}

		// if (empty($phone)) 
		// {
		// 	echo $errorlist["phoneErr"];
		// }
		// else
		// {
			//$phoneNum = $phone;
			if(strlen($phone) == 11 || strlen($phone) == 12)
			{
				if(!preg_match("/^([0-9]{1,5})[-\. ]?([0-9]{6})$/", $phone))
				{
					echo $errorlist["invalidPhn"]; 
				}
				else
				{
					$_SESSION["phone"] = $phone;
					$success++;
				}
			}
			else if(strlen($phone)==14 || strlen($phone)==15)
			{
				if(!preg_match("/^\+?88?([0-9]{1,5})[-\. ]?([0-9]{6})$/", $phone))
				{
					echo $errorlist["invalidPhn"]; 
				}
				else
				{
					$_SESSION["phone"] = $phone;
					$success++;
				}
			}
			// else
			// 	{
			// 	    echo $errorlist["phoneErr"];
			// 	}
			}
			if (empty($fname)) 
			{
			    echo $errorlist["fullNameErr"]; 
			}
			else 
			{
				if(!preg_match("/^[a-zA-Z ]*$/", $fname))  
			  	{
					echo $errorlist["nameFormatErr"]; 
			  	}
			  	else
			  	{
			    	$_SESSION["fullName"] = $fname;
			    	$success++;
			  	}
			}

			print_r($_SESSION);

			if($success==6)
			  {
			  	header("location: index.php");
			  }
			  else
			  	$success=0;
	

	$myArray = array(array('userName' => $user, 'password' => $pass, 'rePassword' => $repass, 'E-mail' => $email, 'phone' => $phone, 'FullName' => $fname));
	
	 setcookie('userN', $myArray[0]['userName'], time()+6400);
	 setcookie('userP', $myArray[0]['password'], time()+6400);

	function validate($data)
		{
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    	}

	// echo $_COOKIE['userN'];
	// echo $_COOKIE['userP'];  
	//$data = implode('<br', $myArray);

	//print_r($myArray[0]['password']);

	// *********Testing*************
	// echo $user."<br>";
	// echo $pass."<br>";
	// echo $repass."<br>";
	// echo $email."<br>";
	// echo $fname."<br>";
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<body>
	<div align="center">
		<h1><a href="register.php">Try Again</h1><br>
		<!-- <button style="font-size: 30px"><a style="text-decoration: none" href="register.php">Register again</button> -->
	</div>
	
</body>
</html>