<!-- Scope refers to the visibility and accessibility of variables within different parts of the code. -->
<?php
$globalVar = "I'm global";

function example(){
    global $globalVar; // global is used to reach the variable declared outside of the function.
    echo $globalVar;
}

example();

?>