<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mileage Calculator Form</title>
    <link href="css/style3.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name']))
                echo htmlspecialchars($_POST['name']); ?>">

            <label>Total Driving Miles</label>
            <input type="number" name="tdm" value="<?php if (isset($_POST['tdm']))
                echo htmlspecialchars($_POST['tdm']); ?>">

            <label>What is yours Typical Driving Speed?</label>
            <input type="number" name="speed" value="<?php if (isset($_POST['speed']))
                echo htmlspecialchars($_POST['speed']); ?>">

            <label>How Many Hours Per Day Of Driving?</label>
            <input type="number" name="hours" value="<?php if (isset($_POST['hours']))
                echo htmlspecialchars($_POST['hours']); ?>">

            <label>Select Your Price of Gas</label>
            <ul>
                <li><input type="radio" name="gas" value="2.5" <?php if (isset($_POST['gas']) && $_POST['gas'] == 2.5)
                    echo 'checked="checked"'; ?>>$2.50</li>
                <li><input type="radio" name="gas" value="3.0" <?php if (isset($_POST['gas']) && $_POST['gas'] == 3.0)
                    echo 'checked="checked"'; ?>>$3.00</li>
                <li><input type="radio" name="gas" value="3.5" <?php if (isset($_POST['gas']) && $_POST['gas'] == 3.5)
                    echo 'checked="checked"'; ?>>$3.50</li>
                <li><input type="radio" name="gas" value="4.0" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.0)
                    echo 'checked="checked"'; ?>>$4.00</li>
                <li><input type="radio" name="gas" value="4.5" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.5)
                    echo 'checked="checked"'; ?>>$4.50</li>
                <li><input type="radio" name="gas" value="5.0" <?php if (isset($_POST['gas']) && $_POST['gas'] == 5.0)
                    echo 'checked="checked"'; ?>>$5.00</li>
            </ul>

            <label>What is Your Vehicals Fuel Efficiency?</label>
            <select name="fuel">
                <option value="" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == NULL)
                    echo 'selected="unselected"'; ?>>Select One</option>
                <option value="10" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '10')
                    echo 'selected="selected"'; ?>>Not Great @ 10MPH</option>
                <option value="16" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '16')
                    echo 'selected="selected"'; ?>>EHH @ 16MPH</option>
                <option value="22" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '22')
                    echo 'selected="selected"'; ?>>Okay @ 22MPH</option>
                <option value="30" <?php if (isset($_POST['fuel']) && $_POST['fuel'] == '30')
                    echo 'selected="selected"'; ?>>Great @ 30MPH</option>
            </select>

            <input type="submit" value="calculate">

            <p><a href="">Reset It!</a></p>

        </fieldset>

    </form>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['name'] == NULL) {
            echo '<p>Please enter your name!</p>';
        }
        if (empty($_POST['tdm'])) {
            echo '<p>Please enter your your expected total of driving miles!</p>';
        }
        if (empty($_POST['speed'])) {
            echo '<p>Please enter your typical driving speed!</p>';
        }
        if (empty($_POST['hours'])) {
            echo '<p>Please enter how many hours a day you want to be driving!</p>';
        } else {
            $hours = floatval($_POST['hours']);
            if ($hours < 0.5 || $hours > 24) {
                echo '<p>Please enter a valid number of hours!</p>';
            }
        }
        
        if (empty($_POST['gas'])) {
            echo '<p>Please enter a gas price!</p>';
        }
        if (empty($_POST['fuel'])) {
            echo '<p>Please enter your Fuel Efficiency!</p>';
        }
        if (
            isset($_POST['name'],
            $_POST['tdm'],
            $_POST['speed'],
            $_POST['hours'],
            $_POST['gas'],
            $_POST['fuel'])
        ) {
            $name = $_POST['name'];
            $tdm = floatval($_POST['tdm']);
            $speed = floatval($_POST['speed']);
            $hours = floatval($_POST['hours']);
            $gas = floatval($_POST['gas']);
            $fuel = floatval($_POST['fuel']);

            if (!empty($tdm && $speed && $hours && $gas && $fuel) && ($name != NULL) && ($hours >= 0.5) && ($hours <= 24)) {

                $total_gas = round($tdm / $fuel);
                $total_gas_price = $total_gas * $gas;
                $total_days = intval($tdm / $speed / $hours);
                $total_hours = ($tdm - $total_days * $speed * $hours) / $speed;
                



                echo '
            <div class="box">
            <h2>Good day, ' . $name . '.</h2>
            <p>You will be traveling a total of ' . round($tdm) . ' miles.</p>
            <p>It will take you about ' . $total_days . ' days and ' . round($total_hours) . ' hours.</p>
            <p>You will be using about ' . $total_gas . ' gallons of gas, which will cost you $' . number_format($total_gas_price, 2) . ' dollars.</p>
            <p>Have a safe trip!</p>
            </div>
            ';
            }
        }
    } // End of Server Request



    ?>

</body>

</html>