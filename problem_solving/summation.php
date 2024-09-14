<?php 
function sum($numbers){
    $total = 0;
    foreach($numbers as $number){
        $total = $total + $number;
    } 
    return $total;
}
$numbers = [20,30,40,50];
$result = sum($numbers);
echo "The sum of these numbers:".$result;

?>