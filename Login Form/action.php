<!-- <?php
    if(isset($_POST['username'],$_POST['password'])){
 
        $user = array(
                        "user" => $_COOKIE['userN'],
                        "pass"=> $_COOKIE['userP']         
                );
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if($username == $user['user'] && $pass == $user['pass']){
            session_start();
            $_SESSION['simple_login'] = $username;
            $_SESSION['pass_login'] = $pass;
            header("Location: home.php");
            exit();
        }else{
        	echo "Wrong User Name or Password";

        }
    }
?> -->
<?php

    //$errors=array('match' => "Only letters and white space allowed",);
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!empty($_POST["username"]))
        {
            $name = dataFilter($_POST["username"]);
            $passWord = dataFilter($_POST["password"]);

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
                    echo "Wrong user or pass";
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

    function dataFilter($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
?>
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