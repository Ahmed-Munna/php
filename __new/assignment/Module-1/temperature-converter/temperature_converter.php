<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Temperature Converter</h2>

           <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="temp" id="num1" placeholder="Temperature..." required><br>
                <select name="operation" id="oparations">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select><br>
                <button type="submit" id="submit">Calculate</button>
           </form>
        <div id="result">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tempa = $_POST["temp"];
                    $operation = $_POST["operation"];

                    switch($operation){
                        case "celsius";
                            echo "Celsius: " . (($tempa - 32) * (5 / 9)) . "°C";
                            break;
                        
                        case "fahrenheit";
                            echo "Fahrenheit: " . (($tempa * 9/5) + 32) . "°F";
                            break;
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>