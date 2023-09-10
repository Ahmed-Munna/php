<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
   <style>
     <?php include "style.css" ?>
   </style>
</head>
<body>
<div class="container">
        <h2>Basic Calculator</h2>

            <input type="number" name="num1" id="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" id="num2" placeholder="Enter second number" required><br>
            <select name="operation" id="oparations">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="binary">Binary Conversion</option>
                <option value="octal">Octal Conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
            </select><br>
            <button type="submit" id="submit">Calculate</button>
        <div id="result">
          
        </div>
    </div>


    <script src="app.js"></script>
</body>
</html>