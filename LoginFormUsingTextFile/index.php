<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Index</title>
</head>
<body>
    <form name="LOGIN" action="" method="POST">
    <div align="center">
        <fieldset align="center" style="width: 50%; font-size: 20px">
        <legend style="font-size: 40px"><b>Log In</b></legend>
        <button type="button" value="" style="float: right;"><a style="text-decoration: none" href="register.php">Register</a></button><br><br>
        <table align="center">
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="username" required=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="Password" name="password" required=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
        </fieldset>
    </div>
    </form>
</body>

</html>
<?php
    if(isset($_POST['submit']))
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $file = file_get_contents("log.txt");
        if(!strstr($file, "$user||$pass"))
        {
            echo "Sorry! You Insert an Invalid information"; 
           
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
?>    