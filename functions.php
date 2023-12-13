<?php

// function myMessage(){
//     echo"Namaste Dunia";
// }
// myMessage();

function schoolMarks($myArray){

    foreach ($myArray as $value) {
        $sum += $value;
    }
    return $sum;
}
$robin =  [92,65,63,78,98];
$sumMarks = schoolMarks($robin);
echo "Total Marks Obtained by Robin out of 500 = ". $sumMarks; 
?>