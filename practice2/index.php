<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    // $a= 50;
    // $b= 20;

    // if($a ==50 and $b ==20) {
    //     echo "Training with Live Project";
    //     echo "<br>";

    // } else{+
    //     echo "Wrong";
    
        
    // }

    // $x="Training With";
    // $y="Live Project";
    // $z="$x . $y";
    // echo $z;
    // echo "<br>";


    // $x= array(
    //     "a"=>"Dhaka",
    //     "b"=>"Rajshahi"
        
    // );

    // $y= array(
    //     "c"=>"comilla",
    //     "d"=>"sylhet"
        
    // );

    // var_dump($x+$y);

    // $x =10;

    // if($x > 5) {
    //     echo "i love php";
    // }

    // else{
    //     echo "Wrong";
    // }


    // $coding = "java";
    // switch($coding) {
    //     case "html":
    //     echo "i love html";
    //     break;

    //     case "php":
    //     echo "i love php";
    //     break;

    //     case "java":
    //     echo "i love java";
    //     break;

    //     default:
    //     echo "i love programming";
        
    // }

    // $x = 1;
    // while($x <= 5){
    //     echo "The number is : $x <br>";
    //     $x++;
    // }


    // for($i=0; $i < 10; $i++){
    //     echo "The number is : $i <br>";
    //     echo "<br>";
    // }


    // $colors = array("blue","green","skyblue");

    // foreach($colors as $color){
    //     echo "$color <br>";
        
    // }

    // function school($name, $year){
    //     echo "$name is started school $year<br>";
    // }

    // school("ML High School", "1975");
    // school("BL High School", "1990");
    // school("AL High School", "1980");

    // function sum($x, $y){
    //     $z = $x+$y;
    //     return $z;
    // }

    // echo "5 + 15 =".sum(5, 15);

    // $ages = array("Korim"=>"25", "Rahim"=>"20", "Mamun"=>"28");

    // $ages["Korim"] = "25";
    // $ages["Rahim"] = "20";
    // $ages["Mamun"] = "28";

    // foreach($ages as $x => $age){
    //     echo "key = ".$x. ", Age = ".$age;
    //     echo "<br>";
    // } 

    // $cars = array(
    //     array("BMW", 15, "Nice"),
    //     array("Volbo", 20, "Dog"),
    //     array("Saab", 40, "Fox"),
    //     array("Audi", 45, "65")

    // );

    // for($row = 1; $row < 4; $row++){
    //     echo "<p>Row Number $row </p>";

    //     echo "<ul>";
    //     for($cols = 1; $cols < 3; $cols++){
    //         echo "<li>".$cars[$row][$cols]."</li>";
    //     }

    //     echo "</ul>";
    // }

    // echo $cars[0][2];
    // echo "<br>";
    // echo $cars[1][2];
    // echo "<br>";
    // echo $cars[2][2];

    // $name = array("D", "F", "A", "B");
    // rsort($name);

    // for($i = 0; $i < 4; $i++) {
    //     echo $name [$i];
    //     echo "<br>";

    // }

    // $age = array("Kamal"=> "20", "Tamim"=> "27", "Rahim"=> "36");
    // asort($age);

    // foreach($age as $Key => $value){
    //     echo "$Key = ".$Key." Value = " .$value;
    //     echo "<br>";
    // }
    
    // // function test1(){
    // //     $a = 5;
    // //     echo $a;
    // //     echo "<br>"
    // // }

    // function test2(){
    //     $b = 10;
    //     echo $b;
    // }

    // test1();
    // test2();
    $x = 15;
    $y = 10;

    function sum(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        
    }

    sum();

    echo $z;
    

    echo $_SERVER['SERVER_NAME'];
    
    
    
    ?>
    
</body>
</html>