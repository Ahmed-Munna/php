<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Grade Calculator</h2>

           <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="num1" id="num1" placeholder="Subject one..." required><br>
                <input type="text" name="num2" id="num2" placeholder="Subject Two..." required><br>
                <button type="submit" id="submit">Calculate</button>
           </form>
        <div id="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    $avg = ($num1 + $num2) / 2;

                    switch($avg){
                        case $avg >= 80:
                            echo "result: A";
                            break;
                        
                        case $avg >= 60:
                            echo "result: B";
                            break;
                        case $avg >= 50:
                            echo "result: C";
                            break;
                        case $avg >= 40:
                            echo "result: D";
                            break;
                        default:
                            echo "result: F";
                            break;
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>