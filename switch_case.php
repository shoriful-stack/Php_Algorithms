<?php
$marks = 79;

if($marks >= 80 && $marks <= 100){
    echo "You got gpa5";
}
elseif($marks >= 70 && $marks <= 79){
    echo "You got gpa4";
}
elseif($marks >= 60 && $marks <= 69){
    echo "You got gpa3.5";
}
elseif($marks >= 50 && $marks <= 59){
    echo "You got gpa3";
}
elseif($marks >= 40 && $marks <= 49){
    echo "You got gpa2";
}
elseif($marks >= 33 && $marks <= 39){
    echo "You got gpa1";
}
else{
    echo "You failed";
}
?>