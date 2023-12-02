<?php
// Index.php page, in the big picture - it represents the homepage of a webpage

session_start();
include('config.php');

// if the username has not been set, you will not see the index.php file but will be directed back to the login page.

if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php'); ?>
<header>

<?php
// if our session for the username is successful, we will display a message
if(isset($_SESSION['success'])):?>

<div class="success">
<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>

</div>
<!--End Success-->
<?php endif; 

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h3>
    Hello
    <?php echo $_SESSION['username'];?>
</h3>
<a href="index.php?logout='1'">Logout</a>
</div>
<!--end welcome-logout div-->
<?php endif;?>
</header>
<dev id="wrapper">
<h1>Welcome to the Homepage of our Website</h1>


</div>
<!-- end wrapper -->
<?php include('./includes/footer.php');?>