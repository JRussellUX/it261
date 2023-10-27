<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency 2 php Form With Drop Down</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']    ;?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Amount</label>
        <input type="number" name="amount">
        <!-- Radio Buttons with additional atribute of value-->
        <label>Choose your Currency</label>
        <ul>
        <li><input type="radio" name="currency" value="0.017"> Rubles</li>
        <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
        <li><input type="radio" name="currency" value="1.157"> Pounds</li>
        <li><input type="radio" name="currency" value="1.00"> Euros</li>
        <li><input type="radio" name="currency" value="0.0074"> Yen</li>
        


        </ul>

        <label>Choose your Banking Institution</label>
        <select name="bank">
            <option value="" NULL>Select One</option>
            <option value="boa">Bank Of America</option>
            <option value="chase">Chase Bank</option>
            <option value="banner">Banner Bank</option>
            <option value="wells">Wells Fargo</option>
            <option value="becu">Boeing Credit Union</option>
         </select>

        <input type="submit" value="Convert It">

        <p><a href="">Reset It!</a></p>


    </fieldset>



    </form>

    <?php
    // we will start with the server request method.
    // then we will ask ourself if any fields are empty
    //if the fields are not empty - we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

         if(empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name</p>';
        } 

        if(empty($_POST['email'])) {
            echo '<p class="error">Please fill out your Email</p>';
        }

        if(empty($_POST['amount'])) {
            echo '<p class="error">Please fill out your Amount</p>';
        }

        if(empty($_POST['currency'])) {
            echo '<p class="error">Please Check your Curency</p>';
        }

        if($_POST['bank'] == NULL)
        echo '<p class="error">Please Choose your Banking Insitution</p>';
        
        
        if(isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'],
        $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            $dollars = $amount * $currency;

            echo '
            <div class="box">
            <h2>Hello '.$name.'</h2>
            <p>You now have <b>$ '.floor($dollars).' American dollars</b>. We will be emailing you at <b>'.$email.'</b>
             with your information as well as depositing your funds at <b>'.$bank.' bank</b>!</p>

            </div>
            ';

        }

    } // end server request


    ?>
    
</body>
</html>