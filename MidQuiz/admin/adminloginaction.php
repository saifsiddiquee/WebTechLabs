	<?php
	if (isset($_POST['submit']))
        {
                $email = $_POST['em'];
                $pass = $_POST['pass'];
                $file = file_get_contents("log.txt");

        if(!strstr($file, "$email||$pass"))
        {
                  echo "Sorry! You Insert an Invalid Email. Please Use a Valid email and Try Again.";
        }
        else
        {
                    session_start();
                    $_SESSION['t_email'] = $email;
                    $_SESSION['t_password']   = $pass;
                    header("Location: adminhome.php");
                    exit();
        }
        }
?>