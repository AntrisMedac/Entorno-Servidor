<?php

$num1=5;
$num2= 7;
$num3= 3;

if ($num1>$num2 && $num1>$num3) {
    echo $num1;
}elseif ($num2>$num1 && $num2>$num3) {
    echo $num2;
}else{
    echo $num3;
}