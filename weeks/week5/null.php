<?php
echo '<h2>First example of "a", It is false, Not NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo '<h2>Second example of "b", Echoing "1". What does that mean? 1 = true</h2>';

$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>Third example of "c", Is not NULL</h2>';

$c = "null";
echo "c is " . is_null($c) . "<br>";

echo '<h2>Forth example of "d", It is NULL</h2>';

$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>
