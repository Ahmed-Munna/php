<!DOCTYPE html>
<html lang="en">
<?php

    $fruits = ["banana","Apple","mango","lichi","Tomato"];
    function selOption($options) {

        foreach ($options as $option) {

            printf("<option value = '%s'>%s</option>\n",strtolower($option),ucwords($option));

        }

    }

    if (isset($_GET["fruits"]) && $_GET["fruits"] != '') {
        foreach ($_GET["fruits"] as $option) {

            printf("<p>%s</p>\n",strtolower($option),ucwords($option));

        }
    }

  

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Fol Er Upor Kono Oshudh Nai..</h1>
        <div class="column column-60 column-offset-20">
            
            <form method="GET">
                
            <label for="fruits">Fruits Name</label>
            <select style = "height: 120px;" name="fruits[]" id="fruits" multiple="multiple">
                <?php
                    selOption($fruits);
                ?>
            </select>


                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>





</body>
</html>