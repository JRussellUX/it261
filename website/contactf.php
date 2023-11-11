<?php

include('./config.php');
include('./includes/header.php');

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$holiday = '';
$weather = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$holiday_err = '';
$weather_err = '';
$privacy_err = '';

// If statement on empty inputs
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please Fill Out Your First Name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please Fill Out Your Last Name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please Include Your Email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['weather'])) {
        $weather_err = 'Please Select a Weather';
    } else {
        $weather = $_POST['weather'];
    }

    if (empty($_POST['holiday'])) {
        $holiday_err = 'Please Pick Your Favorite Holiday(s)';
    } else {
        $holiday = $_POST['holiday'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Please Select Yes';
    } else {
        $privacy = $_POST['privacy'];
    }


    function my_holidays($holiday)
    {
        $my_holiday = '';
        if (!empty($_POST['holiday'])) {
            $my_return = implode(', ', $_POST['holiday']);
        }
        return $my_return;
    } // end my_holiday function

    if (
        isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['weather'],
        $_POST['holiday'],
        $_POST['privacy']) &&
        preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])
    ) {


        $to = 'szemeo@mystudentswa.com';
        $subject = 'test email on ' . date('m/d/y, h i A');
        $body = '
    First Name: ' . $first_name . ' ' . PHP_EOL . '
    Last Name: ' . $last_name . ' ' . PHP_EOL . '
    Email: ' . $email . ' ' . PHP_EOL . '
    Weather: ' . $weather . ' ' . PHP_EOL . '
    Phone: ' . $phone . ' ' . PHP_EOL . '
    Holiday: ' . my_holidays($holiday) . ' ' . PHP_EOL . '
    ';

        $headers = array(
            'From' => 'noreply@jrussellux.com',
        );
        // we will be adding an if statement - this email form will work ONLY if all fields are filled out

        if (
            !empty(
            $first_name && $last_name && $email && $weather && $holiday && $phone
        )
        ) {
            mail($to, $subject, $body, $headers);
            header('Location:thanks.php');

        }
    }
} // End If Statement



?>



<div id="wrapper">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name']))
                echo htmlspecialchars($_POST['first_name']); ?>">
            <span>
                <?php echo $first_name_err; ?>
            </span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name']))
                echo htmlspecialchars($_POST['last_name']); ?>">
            <span>
                <?php echo $last_name_err; ?>
            </span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email']))
                echo htmlspecialchars($_POST['email']); ?>">
            <span>
                <?php echo $email_err; ?>
            </span>

            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone']))
                echo htmlspecialchars($_POST['phone']); ?>">
            <span>
                <?php echo $phone_err; ?>
            </span>

            <label>Pick your Favorite Weather</label>

            <select name="weather">
                <option value="" <?php if (isset($_POST['weather']) && is_null($_POST['weather']))
                    echo 'selected = "unselected"'; ?>>Select One</option>

                <option value="bw" <?php if (isset($_POST['weather']) && $_POST['weather'] == 'bw')
                    echo 'selected = "selected"'; ?>>Summers Day! - Beach Weather</option>

                <option value="fw" <?php if (isset($_POST['weather']) && $_POST['weather'] == 'fw')
                    echo 'selected = "selected"'; ?>>Fall is in the Air! - book and fireplace!</option>

                <option value="ww" <?php if (isset($_POST['weather']) && $_POST['weather'] == 'ww')
                    echo 'selected = "selected"'; ?>>Winter Has Arrives! - Let's Build a Snowman!</option>

                <option value="sw" <?php if (isset($_POST['weather']) && $_POST['weather'] == 'sw')
                    echo 'selected = "selected"'; ?>>Spring is here! - Smell the Flowers!</option>
            </select>
            <span>
                <?php echo $weather_err; ?>
            </span>

            <label>Choose your Favorite Holidays</label>
            <ul>
                <li><input type="checkbox" name="holiday[]" value="ny" <?php if (isset($_POST['holiday']) && in_array('ny', $holiday))
                    echo 'checked = "checked"'; ?>>New Years</li>

                <li><input type="checkbox" name="holiday[]" value="val" <?php if (isset($_POST['holiday']) && in_array('val', $holiday))
                    echo 'checked = "checked"'; ?>>Valientines Day</li>

                <li><input type="checkbox" name="holiday[]" value="pat" <?php if (isset($_POST['holiday']) && in_array('pat', $holiday))
                    echo 'checked = "checked"'; ?>>St. Patricks Day</li>

                <li><input type="checkbox" name="holiday[]" value="ind" <?php if (isset($_POST['holiday']) && in_array('ind', $holiday))
                    echo 'checked = "checked"'; ?>>Independance Day</li>

                <li><input type="checkbox" name="holiday[]" value="hal" <?php if (isset($_POST['holiday']) && in_array('hal', $holiday))
                    echo 'checked = "checked"'; ?>>Halloween</li>

                <li><input type="checkbox" name="holiday[]" value="tha" <?php if (isset($_POST['holiday']) && in_array('tha', $holiday))
                    echo 'checked = "checked"'; ?>>Thanksgiving</li>

                <li><input type="checkbox" name="holiday[]" value="chr" <?php if (isset($_POST['holiday']) && in_array('chr', $holiday))
                    echo 'checked = "checked"'; ?>>Christmas</li>
            </ul>
            <span>
                <?php echo $holiday_err; ?>
            </span>

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
                    echo 'checked = "checked"'; ?>>Yes</li>
            </ul>
            <span>
                <?php echo $privacy_err; ?>
            </span>

            <input type="submit" value="Send">

            <p><a href="">Reset</a></p>
        </fieldset>






    </form>

</div>
<!---end wrapper-->
<?php
include('./includes/footer.php');
?>