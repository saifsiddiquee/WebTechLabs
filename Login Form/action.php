<?php
    if(isset($_POST['username'],$_POST['password'])){
 
        $user = array(
                        "user" => "saif",
                        "pass"=>"123"  ,         
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
            echo '<p>Username or password is invalid</p>';
        }
    }
?>