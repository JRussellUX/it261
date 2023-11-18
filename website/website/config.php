<?php

ob_start();

define('DEBUG', 'TRUE'); // We want to see our errors


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home Page of our Website Project';
        $body = 'Home';
        break;

    case 'about.php':
        $title = 'About Page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php':
        $title = 'Daily Page of our Website Project';
        $body = 'daily inner';
        break;

    case 'project.php':
        $title = 'Project Page of our Website Project';
        $body = 'project inner';
        break;

    case 'contactf.php':
        $title = 'Contact Page of our Website Project';
        $body = 'contact inner';
        break;

    case 'thanks.php':
        $title = 'Thanks Page of our Website Project';
        $body = 'thanks inner';
        break;

    case 'gallery.php':
        $title = 'Gallery Page of our Website Project';
        $body = 'gallery inner';
        break;
}
// our navigation array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contactf.php' => 'Contact',
    // hostgator doesn't allow contact.php to be verified by the html checker, so it is contactf.php
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

// My daily Switch

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Sunday':
        $holiday = '<h2>Sunday we celebrate Easter</h2>';
        $pic = 'easter.png';
        $alt = 'Easter';
        $content = '<p><b>Easter</b> is a Christian holiday that celebrates the resurrection of Jesus Christ.
        Easter takes place three days after Jesus\'s death on Good Friday. This holiday concludes the
        “Passion of Christ” series of holidays that began with Ash Wednesday. Some ways to celebrate on this day are,
        gardening, baking and having some family time.</p>';
        break;

    case 'Monday':
        $holiday = '<h2>Monday we celebrate Independence Day</h2>';
        $pic = 'independence.png';
        $alt = 'Independence Day';
        $content = '<p><b>Independence Day</b> also known as The Fourth of July celebrates the passage of the Declaration of Independence by the
        Continental Congress on July 4, 1776. The Declaration announced the political separation of the 13 North
        American colonies from Great Britain. Some ways to celebrate on this day are, watch National Treasure the movie,
        BBQ, and go see fireworks.</p>';
        break;

    case 'Tuesday':
        $holiday = '<h2>Tuesday we celebrate Halloween</h2>';
        $pic = 'halloween.png';
        $alt = 'Halloween';
        $content = '<p><b>Halloween\'s</b> origins can be traced back to the ancient Celtic festival known as
        Samhain, which was held on November 1 in contemporary calendars. It was believed that on that day,
        the souls of the dead returned to their homes, so people dressed in costumes and lit bonfires to ward
        off spirits. Some ways to celebrate on this day are, watch spooky movies, dress up, and eat a sweet treat.</p>';
        break;

    case 'Wednesday':
        $holiday = '<h2>Wednesday we celebrate Thanksgiving</h2>';
        $pic = 'thanksgiving.png';
        $alt = 'Thanksgiving';
        $content = '<p><b>Thanksgiving Day</b>, U.S. and Canadian holiday. In the U.S. Thanksgiving is modeled on a
        harvest feast shared by the English colonists (Pilgrims) of Plymouth and the Wampanoag people in 1621.
        It is intended to celebrate the blessings of the past year. Some ways to celebrate on this day are, be thankful, and
        have a family feast.</p>';
        break;

    case 'Thursday':
        $holiday = '<h2>Thursday we celebrate Valentine\'s Day</h2>';
        $pic = 'valentines.png';
        $alt = 'Valentines';
        $content = '<p><b>Valentine\'s Day</b>, also called Saint Valentine\'s Day or the Feast of Saint Valentine,
        is celebrated annually on February 14. Some ways to celebrate on this day are, give flowers to someone, write a note
        to someone, and show appreciation.</p>';
        break;

    case 'Friday':
        $holiday = '<h2>Friday we celebrate Christmas</h2>';
        $pic = 'christmas.png';
        $alt = 'Christmas';
        $content = '<p><b>Christmas</b> is an annual festival commemorating the birth of Jesus Christ,
        observed primarily on December 25[a] as a religious and cultural celebration among billions of
        people around the world. Some ways to celebrate on this day are, give a gift, volunteer, and feel jolly.</p>';
        break;

    case 'Saturday':
        $holiday = '<h2>Saturday we celebrate Chanukah</h2>';
        $pic = 'chanukah.png';
        $alt = 'Chanukah';
        $content = '<p><b>Chanukah</b> celebrates the ancient miracle of the oil burning a candle for eight nights,
        Jews celebrating Hanukkah light a candleholder called a menorah for eight nights. Some ways to celebrate on this day are,
        make latkes, play dreidel, and sing songs.</p>';
        break;



}
// function to display an error
function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }


}








?>