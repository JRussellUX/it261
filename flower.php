<?php
include('credentials.php');
include('config.php');
include('./includes/header.php');

?>
<div id="wrapper">

    <h1>Top 10 Best Plants to Plant in Seattle</h1>

    <?php
    $sql = 'SElECT * FROM flowers';

    // We need to connect to the database
    
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    // We have a row that will translate into an array
// if our results are greater than 0, we are happy
    
    if (mysqli_num_rows($result) > 0) {
        // we are going to adda while loop
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
<h2>Information About:  ' . $row['name'] . '</h2>
<ul>
<li><p>Plant Type:  ' . $row['plant_type'] . '</p></li>
<li><p>Plant Duration:  ' . $row['duration'] . '</p></li>
</ul>
<p>For more information about ' . $row['name'] . ', Click <a href="flower-view.php?id=' . $row['flower_id'] . '">here</a></p>
';
        } // end while loop
    } else {
        echo 'Ooops, Something went wrong!';
    }

    // Going to release the server
    
    @mysqli_free_result($result);
    @mysqli_close($iConn);
    ?>




</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');
