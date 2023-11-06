<?php
$fonts = "arial";
$bgcolor ="#444";
$fontcolor="#FC8C41";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        body {font-family:<?php echo $fonts; ?>}
        .phpcoding{width: 900px;margin: 0 auto; background:<?php echo "#ddd"?>; }
        .maincontent{min-height:400px;padding: 20px;};
        .headeroption h2, .footeroption h2{margin:0}
        .headeroption, .footeroption {background: <?php echo $bgcolor;?>; color: <?php echo $fontcolor;?>; text-align: center; padding: 20px;}
    </style> -->
</head>
<body>


<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>


    <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    comment: <textarea name="comment" id="" cols="40" rows="5"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender">Female
    
    <input type="radio" name="gender">Male
    <input type="radio" name="gender">Other
    <br><br>
    <input type="submit" name="submit" value="Submit"> -->

    </form>

    

    <?php

    class StudentInfo {
        protected $name = "Imran";
        protected $phone = "01752321512";

        public function getStudentInfo() {
            $sInfo = (object)[];
            $sInfo -> name = $this -> name;
            $sInfo -> phone = $this -> phone;
            return $sInfo;
        }
    }

    $studentInfo = new StudentInfo();
    $sInfo = $studentInfo -> getStudentInfo();
    echo $sInfo -> name . '<br>';
    echo $sInfo -> phone;

    ?>

    

    




    </body>
    </html>