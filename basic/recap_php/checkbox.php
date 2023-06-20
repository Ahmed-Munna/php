<!DOCTYPE html>
<html lang="en">
<?php

    $checked = '';

    if (isset($_GET["cbox"]) && $_GET["cbox"] = 'on') {

        $checked = 'checked';

    }

    // function isChecked($value) {

    //     if (isset($_GET["names"]) && is_array($_GET["names"]) && in_array($value,$_GET["names"])) {

    //         echo " checked";
    
    //     } 

    // }


    function isChecked($value) {

        if (isset($_GET["names"]) && is_array($_GET["names"]) && in_array($value,$_GET["names"])) {

            echo " checked";

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
        <h1>Mayabi</h1>
        <div class="column column-60 column-offset-20">
            
            <form method="GET">
                
                <input type="checkbox" name="cbox" id="cbox" value = "checked" <?php echo $checked; ?>>
                <label for="cbox" class = "label-inline">Is checked</label>

                <br>

                <b>select some name</b><br>
                <input type="checkbox" name = "names[]" value="munna" <?php isChecked("munna");?>>
                <label for="name1" class = "label-inline">Munna</label><br>
                <input type="checkbox" name = "names[]" value="Dabu" <?php isChecked("Dabu");?>>
                <label for="name2" class = "label-inline">Dabu</label><br>
                <input type="checkbox" name = "names[]" value="Besu" <?php isChecked("Besu");?>>
                <label for="name3" class = "label-inline">Besu</label><br>
                <input type="checkbox" name = "names[]" value="Atik" <?php isChecked("Atik");?>>
                <label for="name4" class = "label-inline">Atik</label><br>
                <input type="checkbox" name = "names[]" value="chall" <?php isChecked("chall");?>>
                <label for="name5" class = "label-inline">Chall</label><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>





</body>
</html>