<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate multiple inheritance using traits. <br>";
echo "Name : hetal baroliya <br>";
echo "Enrollment Number : 24082291001 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
trait A {
    function showA() {
        echo "This is Trait A<br>";
    }
}

trait B {
    function showB() {
        echo "This is Trait B<br>";
    }
}

class Test {
    use A, B;   // Using multiple traits
}

$t = new Test();
$t->showA();
$t->showB();
?>
