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
    <?php
    include('./includes/form.php');
    ?>
</div>
<!---end wrapper-->
<?php
include('./includes/footer.php');
?>