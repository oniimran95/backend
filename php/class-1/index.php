<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_ecommerce";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $users = [];
    for ($i = 0; $i < 5; $i++) {
        $name = "User-$i";
        $email = "user$i@gmail.com";
        $phone = "0175445454$i";
        $users[] = "('$name', '$email', '$phone')";
    }

    $values = implode(',', $users);

    $sql = "INSERT INTO users (name, email, phone) VALUES $values";

    if ($conn->query($sql) === TRUE) {
        echo "created successfully";
    } else {
        echo "error :" . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <style>
        .phpcoding {
            width: 900px;
            margin: 0 auto;
            background: #ddd;
        }
        .headeroption, .footeroption {
            background: #444;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .maincontent {
            min-height: 400px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>PHP Fundamental Training</h2>
        </section>
        <section class="maincontent">
            <?php ?>
        </section>

        <section class="footeroption">
            <h2>www.trainingwithliveproject.com</h2>
        </section>
    </div>
</body>
</html>

        
    
        
        
        
    

