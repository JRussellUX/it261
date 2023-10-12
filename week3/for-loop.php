<?php
// this file will demonstrate for loops in addition to placing your php inside your html
// the for loop -loops through a block of code for a specified number of times
// for (init counter; test counter; increment counter) { code to be executed for each interation}
// celcius and fahrenheit

// $far =($celcius * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid purple;
        }

        td, th {
            border: 1.5px solid purple;
            border-collapse: collapse;
            padding: 5px;
        }

        h1 {
            text-align: center;
            margin: 10px 0;
            color: darkblue;
        }

        h2 {
            text-align: center;
            margin: 10px 0;
            color: green;
        }


    </style>
</head>
<body>
        <h1>My Celcius / Fahrenheit Table</h1>
        <table>
            <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        
            </tr>
            <?php
            for($cel = 0; $cel <= 100; $cel += 2) {
                $far =($cel * 9/5) + 32;
                echo '<tr>';
                echo '<td>'.$cel.' degrees </td>';
                echo '<td> '.$far.' degrees </td>';
                echo '</tr>';
            }
            ?>


         </table>

         <h2>You will now complete a Kilometer/mileage table on your own!</h2>
         <table>
            <tr>
            <th>Kilometer</th>
            <th>Miles</th>
        
            </tr>
            <?php
            for($kil = 0; $kil <= 150; $kil += 10) {
                $mil =($kil * .621371);
                echo '<tr>';
                echo '<td>'.$kil.' Kilometers </td>';
                echo '<td> '.number_format($mil, 2).' Miles </td>';
                echo '</tr>';
            }
            ?>


         </table>
         
    
</body>
</html>


