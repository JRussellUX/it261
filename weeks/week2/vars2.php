<?php
// concatenation
// operators - assignment operators
// some preset functions
// arrays

$name = 'Jennifer';
$first_name = 'Jennifer';
$last_name = 'Russell';
echo '<br>';
$name = 'Jennifer';
$name .= ' Russell'; // the .= joins 2 variables together
echo $name;

echo '<br>';

$color = 'purple';
echo $color;

echo '<br>';
echo 'Jennifer\'s favorite color is '.$color.'.';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x +=5; // The += takes the first assigned integer and adds the new number to it
echo $x;
echo '<br>';
$x = 100;
$x *= 10;
echo $x;
echo '<br>';
echo '<h3>Our product, quantity, and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<br>';
echo '<h3>We would like our amount to reflect two decimal places -- we are thinking about
floats and new function - number_format()</h3>';

$product = 120; // Is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of <br>$'.$total_friendly.'<br> dollars';

echo '<br>';

$product = 120; // Is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
$total_friendly = number_format($total, 2);
echo 'We have a total of <br>'.number_format($total, 2).'<br> dollars';
echo '<br>';
echo '<h3>Our second preset function is our date function!</h3>';
echo '<br>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date("l jS \of F Y h:i:s A");
// ('Y') is for year, ('l') is for year, jS is for date, F is for month, h is hour, i is for minutes, s is for seconds, A is for am or pm
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("l jS \of F Y h:i: A");
echo '<br>';

echo '<h3>Time for an Array!</h3>';
echo '<h4>Below is an index Array!</h4>';
$fruit[] = 'banana';  // 0         // [] on na function tell it to be an array
$fruit[] = 'cherries'; // 1
$fruit[] = 'mango'; // 2
$fruit[] = 'apples'; // 3
$fruit[] = 'oranges'; // 4
$fruit[] = 'grapes'; // 5
// Can we echo an array? No we can not
echo $fruit[2];
echo '<br>';

$fruit = array(  // and array can be written as above or as this way and as below
    'bananas',
    'cherries',
    'mango',
    'apples',
    'oranges',
    'grapes'
);

$fruit = [  
    'bananas',
    'cherries',
    'mango',
    'apples',
    'oranges',
    'grapes'
];

echo '<br>';  // these are ways to display an array on the screen
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
echo'<h3>Now we have an associated array</h3>';

$nav = array(
    'index.php' => 'Home', // index is the key, home s the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'

);

echo '<pre>';
var_dump($nav);
echo '<pre>';
