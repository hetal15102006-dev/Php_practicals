<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to demonstrate the use of constructor and destructor in PHP. <br>";
echo "Name : hetal baroliya <br>";
echo "Enrollment Number : 24082291001 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
class Person {
    public $name;

    function __construct($n) {
        $this->name = $n;
        echo "Constructor called<br>";
    }

    function __destruct() {
        echo "Destructor called<br>";
    }

    function show() {
        echo "Name: " . $this->name . "<br>";
    }
}

$p1 = new Person("Hetal");
$p1->show();
?>
