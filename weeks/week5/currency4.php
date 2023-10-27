<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency 4 Form For Extra Credit</title>
    <link href="css/style2.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name']))
                echo htmlspecialchars($_POST['name']); ?>">

            <label>Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email']))
                echo htmlspecialchars($_POST['email']); ?>">

            <label>Amount</label>
            <input type="number" name="amount" value="<?php if (isset($_POST['amount']))
                echo htmlspecialchars($_POST['amount']); ?>">
            <!-- Radio Buttons with additional atribute of value-->
            <label>Choose your Currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.017)
                    echo 'checked="checked"'; ?>> Rubles</li>
                <li><input type="radio" name="currency" value="0.76" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.76)
                    echo 'checked="checked"'; ?>> Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.15" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.15)
                    echo 'checked="checked"'; ?>> Pounds</li>
                <li><input type="radio" name="currency" value="1.00" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.00)
                    echo 'checked="checked"'; ?>> Euros</li>
                <li><input type="radio" name="currency" value="0.0074" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.0074)
                    echo 'checked="checked"'; ?>> Yen</li>



            </ul>

            <label>Choose your Banking Institution</label>
            <select name="bank">
                <option value="" <?php if (isset($_POST['bank']) && $_POST['bank'] == NULL)
                    echo 'selected="unselected"'; ?>>Select One</option>
                <option value="boa" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'boa')
                    echo 'selected="selected"'; ?>>Bank Of America</option>
                <option value="chase" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'chase')
                    echo 'selected="selected"'; ?>>Chase Bank</option>
                <option value="banner" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'banner')
                    echo 'selected="selected"'; ?>>Banner Bank</option>
                <option value="wells" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'wells')
                    echo 'selected="selected"'; ?>>Wells Fargo</option>
                <option value="becu" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'becu')
                    echo 'selected="selected"'; ?>>Boeing Credit Union</option>
            </select>

            <input type="submit" value="Convert It">

            <p><a href="">Reset It!</a></p>


        </fieldset>



    </form>

    <?php
    // we will start with the server request method.
    // then we will ask ourself if any fields are empty
    //if the fields are not empty - we will elseif they are set
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name</p>';
        }

        if (empty($_POST['email'])) {
            echo '<p class="error">Please fill out your Email</p>';
        }

        if (empty($_POST['amount'])) {
            echo '<p class="error">Please fill out your Amount</p>';
        }

        if (empty($_POST['currency'])) {
            echo '<p class="error">Please Check your Curency</p>';
        }

        if ($_POST['bank'] == NULL)
            echo '<p class="error">Please Choose your Banking Insitution</p>';


        if (
            isset($_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank'])
        ) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];
            $dollars = $amount * $currency;

            if (!empty($name && $email && $amount && $currency) && ($bank != NULL)) {



                echo '
            <div class="box">
            <h2>Hello ' . $name . ',</h2>
            <p>You now have <b>$ ' . number_format($dollars, 2) . ' American dollars</b>. We will be emailing you at <b>' . $email . '</b>
             with your information as well as depositing your funds at <b>' . $bank . ' bank</b>!</p>

            <br>
            ';

                if ($dollars >= 500) {
                    echo '<p><b>I am HAPPY! I have $' . number_format($dollars, 2) . '!</b></p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZbZSe6N_BXs?si=sUEtgAucUZ-z5--8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                } else {
                    echo '<p><b>I am SAD! I have $' . number_format($dollars, 2) . '!</b></p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TdrL3QxjyVw?si=1z-t76E3CFl-TEvg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                }

                echo '</div>';



            }



        }

    } // end server request
    

    ?>
    <?php
    include('../../website/includes/footer.php');
    ?>

</body>

</html>