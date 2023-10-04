<?php
// my variables

// don't forget a variable is merely a container for data


$name = "Jennifer"; // "Jennifer" is a string
$name = 'Jennifer'; //'Jennifer' is also a string
echo $name; // echo the variable to show it on the screen in browser

$body_temp = 98; // 98 is an integer since it has no decimal point
$body_temp_new = 98.6; // 98.6 is a float as it has a decimal point
echo '<br>';
echo '<br>';
echo $body_temp;
echo '<br>';
echo $body_temp_new;
echo '<br>';
echo "My name is $name!";
echo '<br>';
echo 'My name is $name!'; // Some perfer the use of single quotes

echo '<br>';
echo 'My name is '.$name.'!'; // Without '. .' it will not display accuratly on the screen

echo "<br>";
echo 'The normal body tempeture for humans is '.$body_temp_new.' ';
echo "<br>";
$name = 'Sharron';
echo $name; // Sharron will display since a new value has been given to the variable
// You can do arithmitic in PHP
echo "<br>";
$x = 20;
$y = 5;
$z = $x + $y; // I am using the term assigned vs equals
echo "<br>";
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;
echo "<br>";
$z = $x / $y;
echo $z;

echo "<br>";

$first_name = 'Jennifer';
$last_name = 'Russell';
echo $first_name.' ' .$last_name; // Add a space between .' '. to give spave between values on screen
echo "<br>";
echo $first_name." " .$last_name;
echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.' '. $last_name.' ';
// If changing from double quotes to single quotes as above, make sure to add '. .' to display accuratly 