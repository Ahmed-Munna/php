<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Comparison Tool</h2>

           <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="number" name="num1" id="num1" placeholder="Number1..." required><br>
                <input type="number" name="num2" id="num2" placeholder="Number2..." required><br>
                <button type="submit" id="submit">Check</button>
           </form>
        <div id="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];

                    echo ($num1 > $num2) ? "Result: " . $num1 : "Result: " . $num2; 
                }
            ?>
        </div>
    </div>
    
</body>
</html>