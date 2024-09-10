<?php 
function multiply($numbers){
    $products = 1;

    foreach($numbers as $number){
        $products = $products * $number;
    }
    return $products;
}
$numbers = [1,2];
$result = multiply($numbers);
echo "The multiplication of the numbers are:".$products;

?>