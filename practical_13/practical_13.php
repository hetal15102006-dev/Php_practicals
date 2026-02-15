<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate inheritance and method overriding in PHP. <br>";
echo "Name : hetal baroliya <br>";
echo "Enrollment Number : 24082291001 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
class Animal {
    function sound() {
        echo "Animal makes sound<br>";
    }
}

class Dog extends Animal {
    function sound() {
        echo "Dog barks<br>";   // Overridden method
    }
}

$d = new Dog();
$d->sound();
?>
