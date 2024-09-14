<?php 
function getOdd($numbers){
    $oddNum = [];
    foreach($numbers as $number){
        if($number %2 !== 0){
            $oddNum[] = $number;
        }
    }
    return $oddNum;
}

$numbers = [1,2,3,4,5,6,7,8,9];
$result = getOdd($numbers);
echo "The odd numbers of the numbers are:".implode("," ,$oddNum);

?>