<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="EN">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/main.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <title>Quiz Question</title>
</head>
<body>
    <?php
    
        session_start();
        if(empty($_SESSION["s_login"]))
        header("location:  squiz.php");
    ?> 
    <div class="container">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                      <h2>Questions:</h2><br>
                      <?php
                    $dom = simplexml_load_file("admin/qusDB.xml");
                    $id = 1;
                    foreach($dom->qus as $ques)
                    {

                        echo "$ques <br>
                        <input type=\"radio\" name='".$id."' value=\"1\"> $ques->op1
                        <input type=\"radio\" name='".$id."' value=\"2\"> $ques->op2
                        <input type=\"radio\" name='".$id++."' value=\"3\"> $ques->op3 
                        <input type=\"radio\" name='".$id++."' value=\"4\"> $ques->op4
                        <br><br>";

                    }
                    ?>
                  </div>
                </div>
                </form>
                    <center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
                </form> 
            </div>
            <div class="col-sm-2"></div>
    </div>
</body>
</html>