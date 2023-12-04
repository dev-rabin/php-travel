<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Website</title>
</head>
<body>
    <h1>First PHP Website Coding</h1>
    <?php
    $a = 0;
    // while($a <=10){
    //     echo "<br> The value of a is : ";
    //     echo $a;
    //     $a++;

    //Iterating in Arrays
    $languages = array("Python","C++","PHP","Javascript");

    while($a < count($languages)){
        echo "<br> The value of languages is : ";
        echo $languages[$a];
        $a++;
    }
    // }
    

    ?>
</body>
</html>