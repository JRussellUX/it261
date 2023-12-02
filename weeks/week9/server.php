<?php
// server page that will communicate to the database

// our session - this is where we will start our session - it is a way to store the information

// we would like the information that is inputed via our registration form to land in our database

session_start();

include('config.php');
// eventually have a header include
// include('./include/header.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// we will be asking if reg_user is set
// we will also be using a new function: mysqli_rel_escape_string

if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    // what message do we want displayed if they are not inputting the information
    // if empty - say something
    // array_push();

    if (empty($first_name)) {
        array_push($errors, 'First name is required');
    }

    if (empty($last_name)) {
        array_push($errors, 'Last name is required');
    }

    if (empty($email)) {
        array_push($errors, 'Email name is required');
    }

    if (empty($username)) {
        array_push($errors, 'A Username is required');
    }

    if (empty($password1)) {
        array_push($errors, 'Password is required');
    }

    // logic - we are not going to ask if password 2 is empty, our question is does password1 = password2

    if ($password1 !== $password2) {
        array_push($errors, 'Passwords do not match');
    }

    // Select from table where username = username and password = password. AND limit one

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

    $results = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($results);

    // we can only have one unique email, or one unigue username
    // if there is a username in our database, the end user can't user that username
    // if there is already an email in our database, the end user can't user that email

    if ($rows) {
        if ($rows['username'] == $username) {
            array_push($errors, 'Username already exists');
        }

        if ($rows['email'] == $username) {
            array_push($errors, 'Email already exists');
        }
    } // end big if statement

    // if there are NO errors, GREAT!

    if ((int) $errors == 0) {
        $password = md5($password1);

        // logically - we have to insert the information into our database

        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password') ";
        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location:login.php');
    } // if errors
} // isset closed reg_user

if (isset($_POST['login_user'])) {
    // our login page will only hve 2 inout fields - username and password
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }

    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    // counting our errors, and if we have no errors, GREAT!

    if (count($errors) == 0) {
        $password = md5($password);

        //  we are going to query our users table to make sure our username and password match

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

        $results = mysqli_query($iConn, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            // if the above is successful, we will be directed to the index page

            header('Location:index.php');

        } else { 
            array_push($errors, 'Wrong username and password combo');
        
        }

        
    } // end count errors
} // close if isset login_user