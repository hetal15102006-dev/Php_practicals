<?php
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort(). <br>";
echo "Name : hetal baroliya <br>";
echo "Enrollment Number : 24082291001 <br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------<br>";
$marks = array("Hetal"=>85, "Amit"=>90, "Riya"=>80);

asort($marks);
foreach ($marks as $name=>$mark) {
    echo "$name = $mark<br>";
}

ksort($marks);
echo "After ksort:<br>";
foreach ($marks as $name=>$mark) {
    echo "$name = $mark<br>";
}
?>
