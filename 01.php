<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to PHP!</h1>

    <!-- echo -->
    <?php

        //output possibly with HTML display 
        echo "<h3> First php </br> output </h3>";
        //phpinfo();
    
        // echo $variable . "<br>";

        //display variables (even in quotes!)
        $variable = 10;
        echo "Here is the current value: $variable <br>";

        //Concatenation
        $variable = "abc";
        echo "Here is the current value: " . $variable . "<br>";
        
        //Single quotes - variable not displayed
        echo 'Here is the current value: $variable <br/>' . "<br>";

        //escaping
        echo "Dollar sign: \$"


    ?>

    <br><br>

    <!-- Variable scope and arrays -->
    <?php
        echo "Here is again the current value: " . $variable . "<br>";

        //Arithmetic and type casting
        $x = 10;
        //var_dump($x);
        $y = "10x";
        //var_dump($y);
        echo "<br><br>" . $x + $y . "<br><br>";
       // $y = (int)"10 x";
        //echo "<br><br>" . $x + $y . "<br><br>";
       // $y = (int)"s10 gjgje";
        //echo "<br><br>" . $x + $y . "<br><br>";


        if ($x === $y) echo "Equal! <br>";
        else echo "Not equal!<br>";

        echo "<br><br>ARRAYS<br><br>";
        //array (no type/size declaration)
        $example = array("item", 15, 34.7);
        $example[3] = 56;
        $example[5] = 100;

        //Looping through array
        for ($i = 0; $i < count($example); $i++) {
            echo $example[$i];
            echo "<br>";
        }
        echo $example[5];


        //Multidimensional array
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17)
        );

        //Looping through multidimensional array
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
              echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
        }

    ?>

    <!-- server parameters -->
    <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
?> 
    
</body>
</html>