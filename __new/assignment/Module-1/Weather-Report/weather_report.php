<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Weather Report</h2>

           <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="temp" id="num1" placeholder="Temperature(°C)..." required><br>
                <button type="submit" id="submit">Check</button>
           </form>
        <div id="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temp = $_POST["temp"];

                    if ($temp < 8) {
                        echo "It's freezing!";
                    } elseif ($temp <= 15) {
                        echo "It's cool";
                    } elseif ($temp <= 25) {
                        echo "Room temperature";
                    } else {
                        echo "It's warm.";
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>