<?php
    $errMsg = "";
	if (isset($_POST['submit']))
        {
            $email = $_POST['em'];
            $pass = $_POST['pass'];
            $file = file_get_contents("log.txt");


            if(!strstr($file, "$email||$pass"))
                {
                    $errMsg = "Invalid email or password";
                }
            else
                {
                    session_start();
                    $_SESSION['s_login'] = $email;
                    $_SESSION['s_pass']   = $pass;
                    header("Location: category.php");
                    exit();
                }
        }

?>