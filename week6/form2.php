<?php
ob_start();

$wines = '';
$first_name = '';
$last_name = '';
$email = '';
$tel = '';
$gender = '';
$region = '';
$comment = '';
$privacy = '';


$wines_err = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$tel_err = '';
$gender_err = '';
$region_err = '';
$comment_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if inputs are empty, we will declare a statement, else we will assign the $_POST to a var
    if (empty($_POST['wines'])) {
        $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }


    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill out your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please fill out your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) {
        $tel_err = 'Please fill out your phone number';
    } else {
        $tel = $_POST['phone'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please select your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['regions'])) {
        $region_err = 'Please select your region';
    } else {
        $region = $_POST['regions'];
    }

    if (empty($_POST['comments'])) {
        $comment_err = 'Please leave a comment';
    } else {
        $comment = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Please select yes';
    } else {
        $privacy = $_POST['privacy'];
    }


function my_wines($wines) {
    $my_wines = '';
    if(!empty($_POST['wines'])) {
        $my_return = implode(', ', $_POST['wines']);
    }
    return $my_return;
} // end my_wines function



if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['regions'],
$_POST['wines'],
$_POST['comments'],
$_POST['privacy'])) {

    
    $to = 'jrussell6078@gmail.com';
    $subject = 'test email on '.date('m/d/y, h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Phone: '.$tel.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Regions: '.$region.' '.PHP_EOL.'
    Comments: '.$comment.' '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'noreply@jrussellux.com',
    );
    // we will be adding an if statement - this email form will work ONLY if all fields are filled out

    if(!empty(
        $first_name && $last_name && $email && $gender && $wines && $region && $tel && $comment
    )) {
        mail($to, $subject, $body, $headers);
      //  header('Location:Thanks.php');
      
    }


} // end isset



} // closing server request method






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Second Form In Week 6</title>
    <link href="css/style.css?=v1" type="text/css" rel="stylesheet">
</head>

<body>
    <h1>First Form in Week 6</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>
                Contact Jennifer
            </legend>
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

            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female')
                    echo 'checked = "checked"'; ?>>Female</li>
                <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male')
                    echo 'checked = "checked"'; ?>>Male</li>
                <li><input type="radio" name="gender" value="neither" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither')
                    echo 'checked = "checked"'; ?>>Neither</li>
            </ul>
            <span>
                <?php echo $gender_err; ?>
            </span>

            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if (isset($_POST['phone']))
                echo htmlspecialchars($_POST['phone']); ?>">
                <span>
                <?php echo $tel_err; ?>
            </span>

            <label>Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines))
                    echo 'checked = "checked"'; ?>>Cabernet</li>

                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines))
                    echo 'checked = "checked"'; ?>>Merlot</li>

                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines))
                    echo 'checked = "checked"'; ?>>Syrah</li>

                <li><input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines))
                    echo 'checked = "checked"'; ?>>Malbec</li>

                <li><input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $wines))
                    echo 'checked = "checked"'; ?>>Red Blend</li>


            </ul>
            <span>
                <?php echo $wines_err; ?>
            </span>

            <label>Region</label>

            <select name="regions">
                <option value="" <?php if (isset($_POST['regions']) && is_null($_POST['regions']))
                    echo 'selected = "unselected"'; ?>>Select One</option>

                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw')
                    echo 'selected = "selected"'; ?>>Northwest</option>

                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw')
                    echo 'selected = "selected"'; ?>>Southhwest</option>

                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw')
                    echo 'selected = "selected"'; ?>>Midwest</option>

                <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ne')
                    echo 'selected = "selected"'; ?>>Northeast</option>

                <option value="se" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'se')
                    echo 'selected = "selected"'; ?>>Southeast</option>

            </select>
            <span>
                <?php echo $region_err; ?>
            </span>

            <label>Comments</label>
            <textarea name="comments"><?php if (isset($_POST['comments']))
                echo htmlspecialchars($_POST['comments']); ?></textarea>
                <span>
                <?php echo $comment_err; ?>
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

            <p><a href="">Reset</p>








        </fieldset>





    </form>

</body>

</html>