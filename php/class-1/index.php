<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>
    <?php
        $lang = 'PHP';
        echo '<h1>I love '. $lang .'</h1>';

        $students = array(
            array ("Shuvo", "01719861466", "shuvo@gmail.com"),
            array ("Shamim", "01822400600", "shamim@gmail.com"),
            array ("Borhan", "01611267243", "borhan@gmail.com"),
            array ("Rifat", "01611267243", "rifat@gmail.com")
        );

        foreach($students as $key => $row) {
            echo "<h3>Student - ". intVal($key+1) ."</h3>";
            echo "<u>";
            foreach($row as $i => $cols) {
                echo "<li>$cols</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>