<?php

// more on form -- adding additions feilds and>>>
//the logic - if I do not enter anything inside the input field, there will be a message
// if a field is empty, we need to do something
//first_name, last_name, email, comments
// be careful with our braces!!!!!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// create another if statement - if fields are empty - echo please fill out the fields

if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])) {
    echo 'Please make sure all fields are filled out';


} else {
    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
    echo '<br>';
} // end isset

} else {
    echo '
    <form action="" method="post">
    <lable>First Name</lable>
    <input type="text" name="first_name">

    <lable>Last Name</lable>
    <input type="text" name="last_name">

    <lable>Email</lable>
    <input type="email" name="email">

    <lable>Comments</lable>
    <textarea name="comments"></textarea>

    <input type="submit" value="send it!">

    </form>

    <p><a href="">RESET</a></p>
    ';


} // end else