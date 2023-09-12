<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Simple Calculator</h2>

            <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
                <input type="number" name="num1" id="num1" placeholder="Enter first number" required><br>
                <input type="number" name="num2" id="num2" placeholder="Enter second number" required><br>
                <select name="operation" id="oparations">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select><br>
                <button type="submit" id="submit">Calculate</button>
            </form>

        <div id="result">
          <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch($operation){
                    case "add":
                        echo "Result: " . $num1 + $num2;
                        break;
                    case "subtract":
                        echo "Result: " . $num1 - $num2;
                        break;
                    case "multiply":
                        echo "Result: " . $num1 * $num2;
                        break;
                    case "divide":
                        if ($num1 != 0 && $num2 != 0 && $num1 > $num2) {
                            echo "Result: " . $num1 / $num2;
                        } else {
                            echo "Invalid Input";
                        }
                        break;    
                }
             }

          ?>
        </div>
    </div>

</body>
</html>