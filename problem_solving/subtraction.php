<?php 
function sub($numbers){
    $result = array_shift($numbers);

    foreach($numbers as $number){
        $result = $result - $number;
    }
    return $result;
}

$numbers = [100, 30, 40];
$result = sub($numbers);
echo "The subtraction of the numbers are:".$result;













?>