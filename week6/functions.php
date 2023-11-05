<?php
// our fuctions page

function sayHello()
{
    echo 'Hello PHP Fuction';
}

sayHello();

echo '<h2>Arithmetic Problems - Cube</h2>';
function cube($num)
{
    $cubing = $num * $num * $num;
    echo $cubing;
}

cube(5);

echo '<h2>Area - W*H</h2>';
function area($width, $height)
{
    $get_area = $width * $height;
    return $get_area;
}
$get_area = area(5, 12);
echo $get_area;

echo '<h2>Celcius Converter</h2>';
function celcius_converter($cel)
{
    $far = ($cel * 9 / 5) + 32;
    echo $far;
}
celcius_converter(100);

echo '<h2>How do we Deal with Arrays? Using Index Arrays.</h2>';
function area_volume($a, $b, $c)
{
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
$my_array = area_volume(10, 5, 20);
echo '<b>This is my area:</b>' . $my_array[0] . '<br>';
echo '<b>This is my volume:</b>' . $my_array[1] . '<br>';


echo '<h2>Now we will use the List Function</h2>';
function area_volume2($a, $b, $c)
{
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
}
list($area, $volume) = area_volume2(5, 10, 30);
echo '<b>This is my area:</b>' . $area . '<br>';
echo '<b>This is my volume:</b>' . $volume . '<br>';

echo '<h2>Our Navigation</h2>';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
function make_links($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:#b2967d;" href=" ' . $key . '"> ' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a style="color:#ecf8f8;" href=" ' . $key . '"> ' . $value . '</a></li>';
        }

    } // end foreach

    return $my_return;
}
echo '<h2>Our Navigation created with a fuction</h2>';
echo make_links($nav);

echo '<h2>The Implode Fuction</h2>';
$cars = array('toyota', 'ford', 'suburu', 'audi', 'bmw', 'mercedes', 'lexus');

$my_cars = implode(', ', $cars);

echo $my_cars;

echo '<h2>Logic behind the wines on our form</h2>
<p>If post wines is not empty, take post wines and implode them, and create a new variable named $my_wines.</p>
';