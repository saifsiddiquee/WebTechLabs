<?php
    if(isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $file = file_get_contents("log.txt");
        if(!strstr($file, "$user||$pass"))
        {
            echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again."; 
           
        }
        else
        {
             session_start();
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $pass;
            header("Location: home.php");
            exit();
        }
    }

    //     if($user == $user['user'] && $pass == $user['pass'])
    //     {
    //         session_start();
    //         $_SESSION['username'] = $username;
    //         $_SESSION['password'] = $pass;
    //         header("Location: home.php");
    //         exit();
    //     }
    //     else
    //     {
    //     	echo "Wrong User Name or Password";

    //     }
    // }
?>
<!-- <?php

    //$errors=array('match' => "Only letters and white space allowed",);
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!empty($_POST["username"]))
        {
            $name = validate($_POST["username"]);
            $pass = validate($_POST["password"]);
            $file = file_get_contents("log.txt");

            if(!strstr($file, "$user||$pass"))
            {
             echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.";
            }

            if(preg_match("/^[a-zA-Z ]*$/",$name))  
            {
                if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
                {
                    if($name==$_SESSION["username"] && $passWord==$_SESSION["password"])
                    {
                        header("location: home.php");
                    }
                    else
                    {
                        echo " Wrong username or password";
                    }
                }
                else
                {
                    echo "Wrong username or password";
                }
            }

            else
            {
                echo "user name should conltain only letters";
            }
        }

        if(empty($_POST["username"]))
        {
            echo "input user name first.<br/>"; 
        }

        if(empty($_POST["password"]))
        {
            echo "input password please"; 
        }

    }

    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Warning!</title>
</head>
<body>
	<div align="center">
		<button style="font-size: 20px"><a style="text-decoration: none" href="index.php">Login Again</button>

	</div>
</body>
</html>