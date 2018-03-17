 <?php
    
    session_start();
    $q        = $_POST['question'];
    $q1       = $_POST['question2'];
    $q2       = $_POST['question3'];
    $file     = file_get_contents("question.txt");
    $string  = "$q||$q1||$q2";
         if(!strstr($file, "$string"))
         {
               $myFile = "question.txt";
               $fh = fopen($myFile, 'a') or die("can't open file");
               $stringData = "$q||$q1||$q2\n";
               fwrite($fh, $stringData);
               echo "Your Question Successfully Inserted.";
               fclose($fh);
         }
         else
         {
             echo "Your question can not be submitted";
         }
      
        $success=0;
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
    if (!empty($q))
    {
        $_SESSION["question"] = $q;
        $success++;
    }
    if (!empty($q))
    {
        $_SESSION["question2"] = $q1;
        $success++;
    }
    if (!empty($q))
    {
        $_SESSION["question3"] = $q2;
        $success++;
    }
    print_r($_SESSION);
         if($success==3)
           {
            header("location: ../squiz.php");
           }
           else
            $success=0;  
   }     

?>