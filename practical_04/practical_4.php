<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system. <br>";
echo "Name : hetal baroliya <br>";
echo "Enrollment Number : 24082291001 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
$a = 10;
$b = 5;
$op = "+";

switch ($op) {
    case "+":
        echo "Result = " . ($a + $b);
        break;
    case "-":
        echo "Result = " . ($a - $b);
        break;
    case "*":
        echo "Result = " . ($a * $b);
        break;
    case "/":
        echo "Result = " . ($a / $b);
        break;
    default:
        echo "Invalid operator";
}
?>
