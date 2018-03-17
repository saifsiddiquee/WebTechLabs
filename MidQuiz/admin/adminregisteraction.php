<?php
       if (isset($_POST['submit']))
         { 
             $fname   = validate($_POST['firstname']);
		         $lname   = validate($_POST['lastname']);
		         $email   = validate($_POST['em']);
		         $pass    = validate($_POST["pass"]);
		         $cpass   = validate($_POST["cpass"]);
             $file    = file_get_contents("log.txt");
             $string  = "$fname||$lname||$email||$pass||$cpass";
         if(!strstr($file, "$string"))
         {
               $myFile = "log.txt";
               $fh = fopen($myFile, 'a') or die("can't open file");
               $stringData = "$fname||$lname||$email||$pass||$cpass\n";
               fwrite($fh, $stringData);
               
               echo "Registration Successfull.";
               fclose($fh);
         }
         else
         {
             echo "Sorry the email: $email is already registed.";
         }
      }
      function validate($data)
      {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
      }
?> 