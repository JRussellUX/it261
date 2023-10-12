<?php
// class coffee exercise
// if today is friday, it will be pumpkin latt day
// Introducing the isset() function
// then we will introduce our first GLOBAL variable
// Our Switch

// starting the switch
// if $GET('today') is set, $today, then all is well, but if it is not set therefore the else is the day
// else, today is today
// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set

// $variable = 'This is our variable';
// if(isset($variable)) {
//  echo 'Variable has been set';
// } else
// echo 'Variable has not been set';

// echo'<br>';

// if(isset($_GET['today'])) {
// echo 'Today has been set';
// } else {
// echo 'Not!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {
    case 'Thursday' :
        $coffee = '<h2>Thursday is our Pumpkin Latte Day</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p><b>Pumpkin Latte</b> Mix in pumpkin puree, maple syrup, pumpkin pie spice, and vanilla until well combined.</p>';
        break;

    case 'Friday' :
        $coffee = '<h2>Friday is our Green Tea Latte Day</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea';
        $content = '<p>A <b>green tea latte</b> is simply a latte made with green tea instead of espresso.
        Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte,
        we remove the coffee and use tea in its place. You can use any type of green tea to make a latte,
        but the most common one these days is definitely a matcha latte.</p>';
        break;

    case 'Saturday' :
        $coffee = '<h2>Saturday is our Regular Coffee</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular coffee';
        $content = '<p>Black <b>coffee</b> is as simple as it gets with ground coffee beans steeped in hot water,
        served warm. And if you want to sound fancy, you can call black coffee by its proper name: cafe noir.
        Since it isn\'t doctored up with milk or sugar, the quality of coffee is especially important</p>';
        break;

    case 'Sunday' :
        $coffee = '<h2>Sunday is our Latte Day</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = '<p>A <b>latte</b> or caffè latte is a milk coffee that is a made up of one or two shots of espresso,
        steamed milk and a final, thin layer of frothed milk on top.</p>';
        break;
    
    case 'Monday' :
        $coffee = '<h2>Monday is our Americano Day</h2>';
        $pic = 'americano.jpg';
        $alt = 'Aericano';
        $content = '<p>An <b>Americano</b> is traditionally served black,
        meaning without milk. An Americano is therefore a black coffee — unless you add milk!</p>';
        break;

    case 'Tuesday' :
        $coffee = '<h2>Tuesday is our frappuccino Day</h2>';
        $pic = 'frap.jpg';
        $alt = 'frappuccino';
        $content = '<p>A <b>Frappuccino</b> is a blended coffee drink that is typically made with coffee or
        espresso, milk, and ice.</p>';
        break;

    case 'Wednesday' :
        $coffee = '<h2>Wednesday is our Cappuccino Day</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = '<p>The traditional <b>Cappuccino</b> consists of a single espresso,
        on which the barista pours the hot foamed milk, resulting in a 2 cm (3⁄4 in) thick milk foam on top.</p>';
        break;

    

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Class Exercise</title>
    <style>

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<div id="wrapper">
    <h1>My Wonderful Switch Class Exercise, Not Homework</h1>
    <?php
    echo $coffee;
    ?>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <?php echo $content; ?>
    <h2>Check out our Daily Specials</h2>
    <p><i>Complete all of the days!</i></p>
    <ul>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
     </ul>




</div>
<!--end wrapper-->
</body>
</html>