<?php

$num1 = 0;
$num2 = 1;
$num3 = 1;

for ($i = 0; $i < 10; $i++){
    echo $num1 ."\n";
    $num2 = $num3;
    $num3 = $num2 + $num1;
    $num1 = $num2;
}