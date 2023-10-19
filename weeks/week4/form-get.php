<?php
// this is our first form
// we will be using the $_GET gloabal variable

// our logic is : i will be asking for a name and email in my form
// if it is set, yay
// if not, show me the form

if(isset($_GET['name'],
      $_GET['email'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
      } else {
        echo '
        <form action = "" method = "get">
        <lable>NAME</lable>
        <input type="text" name="Name">
        <lable>EMAIL</lable>
        <input type="email" name="Email">
        <input type="submit" value="Confirm">
        </form>
        ';
      }