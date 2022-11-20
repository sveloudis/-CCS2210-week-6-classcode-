<?php
    if (empty($_POST['vehicle']))
    //$x = $_POST['vehicle']; 
    //if (empty($x)) {
        echo("You didn't make a selection.");
    //}
    else {
        $x = $_POST['vehicle'];   
        $N = count($x);

        echo("You made $N selections: <br>");
        for($i=0; $i < $N; $i++) {
            echo($i . "." . " " . $x[$i] . "<br>");
        }
    }
?>