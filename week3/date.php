<?php
// date function and if statements
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');


echo '<br>';
echo date('l, F j, Y h:i: A');


echo '<br>';
$name = 'Jennifer';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;
echo '<br>';
// the logic behind this is IF the time is less or equal to 11 then it is morning
// IF the time is less or equal to 17 (5pm) then it is afternoon
// Now we will have an else, that will mean it is evening

if($our_time <= 11) {
    echo '<h2 style="color:yellow;">Good Morning, '.$name.'</h2>
    <img src="./images/goodmorning.jpeg" alt"sun">
    <p> It\'s time to wake up!</p>
    ';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'</h2>
    <img src="./images/afternoon.jpeg" alt"afternoon">
    <p> Have a great day!</p>
    ';
} else {
    echo '<h2 style="color:blue;">Good Evening, '.$name.'</h2>
    <img src="./images/evening.jpeg" alt"evening">
    <p> It\'s time to relax!</p>
    ';
}


echo '<br>';