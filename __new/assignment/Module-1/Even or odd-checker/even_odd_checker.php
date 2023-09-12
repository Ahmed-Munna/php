<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Even or Odd Checker</h2>

           <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="num1" id="num1" placeholder="Subject one..." required><br>
                <button type="submit" id="submit">Check</button>
           </form>
        <div id="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];

                    echo (($num1 % 2) == 0) ? "Even Number" : "Odd Number"; 
                }
            ?>
        </div>
    </div>
    
</body>
</html>