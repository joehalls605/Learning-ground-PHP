<!-- 
PHP code is embedded in HTML using special tags. The PHP interpreter executes the code between these tags.
-->
<?php
echo "Hello, World!"; // Output text

// : Variables are used to store data that can be used later. They start with a dollar sign $ followed by the variable name.
$variable = "Hello, PHP!";
$number = 42;
$boolean = true;

// Constants are similar to variables but their values cannot be changed once set. They are defined using define().
define("PI", 3.14);
echo PI;

//  Data types specify the kind of data a variable can hold, such as strings, numbers, or arrays.
$string = "Hello";
$integerNumber = 5;
$bool = false;
$array = array(1,2,3,4,5);
$object = new stdClass();
$null = null;
?>

