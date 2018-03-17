 <?php
    if (isset($_POST['submit']))
    {   
        session_start();

        $xml = new DomDocument("1.0","UTF-8");
        $xml->load('qusDB.xml');

        $q        = $_POST['qus'];
        $op1      = $_POST['op1'];
        $op2      = $_POST['op2'];
        $op3      = $_POST['op3'];
        $op4      = $_POST['op4'];
        $oa       = $_POST['oa'];

        $QusTag = $xml->getElementsByTagName("Question")->item(0);
        $qTag = $xml->createElement("qus", $q);
          $op1Tag = $xml->createElement("op1", $op1);
          $op2Tag = $xml->createElement("op2", $op2);
          $op3Tag = $xml->createElement("op3", $op3);
          $op4Tag = $xml->createElement("op4", $op4);
          $oaTag = $xml->createElement("oa", $oa);

          $qTag->appendChild($op1Tag);
          $qTag->appendChild($op2Tag);
          $qTag->appendChild($op3Tag);
          $qTag->appendChild($op4Tag);
          $qTag->appendChild($oaTag);

        $QusTag->appendChild($qTag);
        $xml->save('qusDB.xml');



//         $file     = file_get_contents("question.txt");
//         $string   = "$q: a)$op1, b)$op2, c)$op3, d)$op4";
//              if(!strstr($file, "$string"))
//              {
//                    $myFile = "question.txt";
//                    //$ansFile = "answer.txt";
//                    $fh = fopen($myFile, 'a') or die("can't open file");
//                    //$fh1 = fopen($ansFile, 'a') or die("can't open file")
//                   // ftruncate($fh, 0);
//                    $stringData = "$q: a)$op1, b)$op2, c)$op3, d)$op4".PHP_EOL;
//                    //$ansString = "$op1".PHP_EOL;
//                    fwrite($fh, $stringData);
//                    //fwrite($fh1, $ansString);
//                    echo "Your Question Successfully Inserted.";
//                    fclose($fh);
//                    //fclose($fh1);
//              }
//              else
//              {
//                  echo "Your question can not be submitted";
//              }
          
//         $success=0;
//        if ($_SERVER["REQUEST_METHOD"] == "POST") 
//         {
//             if (!empty($q))
//             {
//                 $_SESSION["qus"] = $q;
//                 $success++;
//             }
//             if (!empty($op1))
//             {
//                 $_SESSION["op1"] = $op1;
//                 $success++;
//             }
//             if (!empty($op2))
//             {
//                 $_SESSION["op2"] = $op2;
//                 $success++;
//             }
//             if (!empty($op3))
//             {
//                 $_SESSION["op3"] = $op3;
//                 $success++;
//             }
//             if (!empty($op4))
//             {
//                 $_SESSION["op4"] = $op4;
//                 $success++;
//             }
//             if (!empty($oa))
//             {
//                 $_SESSION["oa"] = $oa;
//                 $success++;
//             }
//             //print_r($_SESSION);
//              if($success==6)
//                {
//                 header("location: quiz.php");
//                 echo "Your Question Successfully Inserted.";
//                }
//                else
//                 $success=0;  
//        }
 }

?>