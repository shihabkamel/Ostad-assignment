<?php
$num1 = 7;
$num2 = 8;
$num3 = 2;

if ($num1 > $num2) {
    if ($num1 > $num3) {
        echo "The largest number is $num1";
    } else {
        echo "The largest number is $num3";
    }
} else if ($num2 > $num3) {
    if ($num2 > $num1) {
        echo "The largest number is $num2";
    } else {
        echo "The largest number is $num1";
    }
} else {
    echo "The largest number is $num3";
}
