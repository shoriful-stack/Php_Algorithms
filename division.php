<?php 
function division($numbers){
    $result = $numbers[0];
    for($i = 1; $i < count($numbers); $i++){
        if($numbers[$i] == 0){
            return "Error: Division by zero";
        }
        $result = $result / $numbers[$i];
    }
    return $result;
}

$numbers = [90, 5, 3];
$result = division($numbers);
echo "The division of the numbers are:".$result;
?>