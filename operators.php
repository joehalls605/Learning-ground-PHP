<?php 

$a = 10;
$b = 5;
$sum = $a + $b; // 15
echo $sum;


$a = 10;
$b = 5;
$difference = $a - $b; // 5
echo $difference;


$a = 10;
$b = 3;
$remainder = $a % $b; // 1
echo $remainder;


$a = 5;
$b = 5;
$isEqual = ($a == $b); // true
echo $isEqual ? "true" : "false";

$a = 7;
$b = 5;
$isGreater = ($a > $b);
echo $isGreater ? "true" : "false";


$a = true;
$b = false;
$result = ($a && $b); // false
echo $result ? "true" : "false";
?>