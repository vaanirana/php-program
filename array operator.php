<?php

$x = array("a" => "Red", "b" => "Green", "c" => "Blue");

$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

$z = $x + $y; // Union of $x and Sy

var_dump($z);
echo "<br>";

var_dump($x == $y);// Outputs: boolean false
echo "<br>";

var_dump($x === $y);// Outputs: boolean false
echo "<br>";

var_dump($x != $y); // Outputs: boolean true
echo "<br>";

var_dump($x <> $y); // Outputs: boolean true
echo "<br>";

var_dump($x !== $y); // Outputs: boolean true
echo "<br>";
echo"THIS PROGRAM IS DONE BY VAANI ERP-162"; 

?>