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