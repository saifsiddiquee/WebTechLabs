<?php
    if (isset($_POST['submit']))
    {   
        session_start();
         if(isset($_SESSION['t_email']))
        {

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
        }
        else
        {
            header("Location: index.php");
            exit();
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>Questions</title>
</head>
<body>

<!-- <input type="radio" name=""><?php echo $_SESSION['simple_login'] ?><br>
<input type="radio" name=""><?php echo $_SESSION['simple_login'] ?><br>

 -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="table-responsive">
            <table class="table table-striped">
                  <form method="post" action="quiz.php">
                    <div class="form-group">
                      <label for="text">Question</label>
                      <input type="text" class="form-control" name="qus"  placeholder="Enter question">
                    </div>

                    <div class="form-group">
                      <label for="text">option-1</label>
                      <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
                    </div>
                    <div class="form-group">
                      <label for="text">option-2</label>
                      <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
                    </div>
                    
                    <div class="form-group">
                      <label for="text">option-3</label>
                      <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
                    </div>
                    
                    <div class="form-group">
                      <label for="text">option-4</label>
                      <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
                    </div>
<!--                     <div class="form-group">
                      <label for="text">answer</label>
                      <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
                    </div> -->
                    <div class="form-group">
                      <label for="answer">Select Answer:</label>
                      <select class="form-control" id="answer" name="oa">
                        <option value="op1">option-1</option>
                        <option value="op2">option-2</option>
                        <option value="op3">option-3</option>
                        <option value="op4">option-4</option>
                      </select>
                    </div>
                    </div>
                    <button type="button" class="btn btn-warning">Next Qusestion</button>&nbsp;
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                  </form>
              </tbody>
            </table>
          </div>
        </div>

</body>
</html>