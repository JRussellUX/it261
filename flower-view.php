<?php
include('credentials.php');
// do not call out header includes yet
// the following information is above the doctype
include('config.php');

// is GET set?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: flower.php');
}

$sql = 'SElECT * FROM flowers WHERE flower_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $name = stripcslashes($row['name']);
        $details = stripcslashes($row['details']);
        $plant_type = stripcslashes($row['plant_type']);
        $sun = stripcslashes($row['sun']);
        $water = stripcslashes($row['water_needs']);
        $soil = stripcslashes($row['soil']);
        $duration = stripcslashes($row['duration']);
        $height = stripcslashes($row['mature_height']);
        // will I add another column?
        $feedback = '';
    } // close while loop
} else {
    $feedback = 'Ooops, something went wrong!';
}

include('./includes/header.php');
?>
<div id="wrapper">
<main>
<h1><?php echo $name;?></h1>
<ul>
    <?php
    echo '
    <li><p><b>First Name: </b>'.$name.'</p></li>
    <li><p><b>Plant Type: </b>'.$plant_type.'</p></li>
    <li><p><b>Sun Needs: </b>'.$sun.'</p></li>
    <li><p><b>Water Needs: </b>'.$water.'</p></li>
    <li><p><b>Soil Prefrence: </b>'.$soil.'</p></li>
    <li><p><b>Duration: </b>'.$duration.'</p></li>
    <li><p><b>Mature Height: </b>'.$height.'</p></li>
    ';
    ?>

</ul>
<p><?php
echo $details;
?>

</p>
<p>Return to Our <a href="flower.php">Flower Page</a></p>
</main>

<aside>
    <figure>
<img src="./plants/plant<?php echo $id ;?>.jpeg" alt="<?php echo $name ;?>">
<figcaption>
    <?php echo $name ;?>
</figcaption>
    </figure>

</aside>

</div>
<!-- End Wrapper -->
<?php
@mysqli_free_result($result);
@mysqli_close($iConn);
include('./includes/footer.php');