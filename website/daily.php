<?php
include('./includes/header.php');

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
        $holiday = '<h2>Sunday we celebrate Easter</h2>';
        $pic = 'easter.png';
        $alt = 'Easter';
        $content = '<p><b>Easter</b> is a Christian holiday that celebrates the resurrection of Jesus Christ.
        Easter takes place three days after Jesus\'s death on Good Friday. This holiday concludes the
        “Passion of Christ” series of holidays that began with Ash Wednesday. Some ways to celebrate on this day are,
        gardening, baking and having some family time.</p>';
        break;

    case 'Monday' :
        $holiday = '<h2>Monday we celebrate Independence Day</h2>';
        $pic = 'independence.png';
        $alt = 'Independence Day';
        $content = '<p><b>Independence Day</b> also known as The Fourth of July celebrates the passage of the Declaration of Independence by the
        Continental Congress on July 4, 1776. The Declaration announced the political separation of the 13 North
        American colonies from Great Britain. Some ways to celebrate on this day are, watch National Treasure the movie,
        BBQ, and go see fireworks.</p>';
        break;

    case 'Tuesday' :
        $holiday = '<h2>Tuesday we celebrate Halloween</h2>';
        $pic = 'halloween.png';
        $alt = 'Halloween';
        $content = '<p><b>Halloween\'s</b> origins can be traced back to the ancient Celtic festival known as
        Samhain, which was held on November 1 in contemporary calendars. It was believed that on that day,
        the souls of the dead returned to their homes, so people dressed in costumes and lit bonfires to ward
        off spirits. Some ways to celebrate on this day are, watch spooky movies, dress up, and eat a sweet treat.</p>';
        break;

    case 'Wednesday' :
        $holiday = '<h2>Wednesday we celebrate Thanksgiving</h2>';
        $pic = 'thanksgiving.png';
        $alt = 'Thanksgiving';
        $content = '<p><b>Thanksgiving Day</b>, U.S. and Canadian holiday. In the U.S. Thanksgiving is modeled on a
        harvest feast shared by the English colonists (Pilgrims) of Plymouth and the Wampanoag people in 1621.
        It is intended to celebrate the blessings of the past year. Some ways to celebrate on this day are, be thankful, and
        have a family feast.</p>';
        break;

    case 'Thursday' :
        $holiday = '<h2>Thursday we celebrate Valentine\'s Day</h2>';
        $pic = 'valentines.png';
        $alt = 'Valentines';
        $content = '<p><b>Valentine\'s Day</b>, also called Saint Valentine\'s Day or the Feast of Saint Valentine,
        is celebrated annually on February 14. Some ways to celebrate on this day are, give flowers to someone, write a note
        to someone, and show appreciation.</p>';
        break;

    case 'Friday' :
        $holiday = '<h2>Friday we celebrate Christmas</h2>';
        $pic = 'christmas.png';
        $alt = 'Christmas';
        $content = '<p><b>Christmas</b> is an annual festival commemorating the birth of Jesus Christ,
        observed primarily on December 25[a] as a religious and cultural celebration among billions of
        people around the world. Some ways to celebrate on this day are, give a gift, volunteer, and feel jolly.</p>';
        break;
        
    case 'Saturday' :
        $holiday = '<h2>Saturday we celebrate Chanukah</h2>';
        $pic = 'chanukah.png';
        $alt = 'Chanukah';
        $content = '<p><b>Chanukah</b> celebrates the ancient miracle of the oil burning a candle for eight nights,
        Jews celebrating Hanukkah light a candleholder called a menorah for eight nights. Some ways to celebrate on this day are,
        make latkes, play dreidel, and sing songs.</p>';
        break;

    

}


?>

<div id="wrapper">
    <h1>Holidays to Celebrate Daily</h1>
    <?php
    echo $holiday;
    ?>
    <img src="./images/<?php echo $pic;?>" height="250" alt="<?php echo $alt;?>">
    <?php echo $content; ?>
    <h2>Take a look at other daily holidays!</h2>
    <ul>
        <li><a style="color:purple;" href="daily.php?today=Sunday">Sunday</a></li>
        <li><a style="color:red;" href="daily.php?today=Monday">Monday</a></li>
        <li><a style="color:orange;" href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a style="color:brown;" href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a style="color:pink;" href="daily.php?today=Thursday">Thursday</a></li>
        <li><a style="color:green;" href="daily.php?today=Friday">Friday</a></li>
        <li><a style="color:darkblue;" href="daily.php?today=Saturday">Saturday</a></li>
     </ul>




</div>
<!--end wrapper-->
<?php
include('./includes/footer.php');
?>