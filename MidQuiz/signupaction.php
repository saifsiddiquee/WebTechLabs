<?php
         session_start();
         $fname  = validate($_POST['firstname']);
         $lname  = validate($_POST['lastname']);
         $email  = validate($_POST['em']);
         $pass   = validate($_POST["pass"]);
         $cpass   = validate($_POST["cpass"]);
         $file   = file_get_contents("log.txt");
         $string = "$fname||$lname||$email||$pass||$cpass";

         if(!strstr($file, "$string"))
         {
               $myFile = "log.txt";
               $fh = fopen($myFile, 'a') or die("can't open file");
               $stringData = "$fname||$lname||$email||$pass||$cpass\n";
               fwrite($fh, $stringData);
               //echo "your Registration Information Successfully Inserted.";
               fclose($fh);
         }
         else
         {
             echo "Sorry the email: $email is already in database. please use different email.";
         }

        $errorlist = array("nameErr" => "Name is required.<br/>", "nameFormatErr" => "Name should only Contain characterts.<br/>","emailErr" => "Email is required","emailformatErr" => "Invalid email format.<br/>","passwordErr" => "Password required.<br/>","confPasswordErr" => "Input the password again.<br/>","passwordMatchErr" => "Password doesn't match.<br/>");

         $success=0;
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($fname))
      {
         echo $errorlist["nameErr"];
      }
      if(!preg_match("/^[a-zA-Z ]*$/",$fname))  
         {
            echo $errorlist["nameFormatErr"]; 
         }
         else
         {
            $_SESSION["firstname"] = $fname;
            $success++;
         }
         if(!preg_match("/^[a-zA-Z ]*$/",$fname))  
         {
            echo $errorlist["nameFormatErr"]; 
         }
         else
         {
            $_SESSION["lastname"] = $lname;
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
         if (empty($cpass)) 
         {
            echo $errorlist["confPasswordErr"]; 
         } 
         else
         {
            if($cpass === $pass)
            {
               $_SESSION["cpass"] = $cpass;
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
               $_SESSION["em"] = $email;
               $success++;
            }
      }
        // print_r($_SESSION);
         if($success==5)
           {

           header("location: index.php");   
        }
           else
            $success=0; 
            }   
      
         
   function validate($data)
      {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
      }

?> 