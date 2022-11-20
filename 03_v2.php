<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form name="myForm" action="?=$_SERVER['PHP_SELF']?" method="POST">
        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
        <label for="vehicle3"> I have a boat</label><br><br>
        <input type="submit" value="Submit">
    </form> 

    <!-- server parameters -->
    <?php
        $x = $_POST['vehicle']; 
        if (empty($x)) {
            echo "You didn't make a selection." ;
        } 
        else {    
            $N = count($x);
    
            if ($N == 1 ) echo "You made $N selection: <br>";
            else echo "You made $N selections: <br>";

            for($i=0; $i < $N; $i++) {
            echo $i+1 . "." . " " . $x[$i] . "<br>";
            }
        }
    ?> 
    
</body>
</html>