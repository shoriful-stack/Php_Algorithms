<?php
function countDown($x){
    if($x <= 0){
       return $x;
    };
    echo $x ."\n";
    countDown($x -1);
}
countDown(100);