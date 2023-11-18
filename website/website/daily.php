<?php
include('./config.php');
include('./includes/header.php');
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