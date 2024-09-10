<?php 
$number = 10;

if($number > 0){
    echo "Positive";
}
elseif($number < 0){
    echo "Negative";
}
else{
    echo "Zero";
}

for($i = 0; $i < 5; $i++;){
    echo $i;
}

$i = 0;
while($i < 5){
    echo $i;
    $i++;
}

$fruits = array("apple", "banana", "cherry");
foreach($fruits as $fruit){
    echo $fruit;
}

?>