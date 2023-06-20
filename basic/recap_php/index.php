<!DOCTYPE html>
<html lang="en">
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
        <div class="column column-60 column-offset-29">
            <h2>Our First Form</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem iure labore, aut accusamus error dolorum voluptatum fuga architecto nostrum temporibus magnam. Aliquid itaque illo corrupti ab obcaecati, eaque vitae laudantium. Dicta tenetur molestias voluptatibus, reiciendis aliquam saepe vitae ratione. Quisquam.</p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
                $fname = '';
                $lname = '';
                $checked = '';

                if (isset($_GET['fname']) && ! empty($_GET['fname']) ) {
                    $fname = $_GET['fname'];
                }

                if (isset($_GET['lname']) && ! empty($_GET['lname']) ) {
                    $lname = $_GET['lname'];
                }

                // single checkbox checked
                    // if (isset($_GET['fruite']) && $_GET['fruite'] == 'on') {
                    //     $checked = 'checked';
                    // }
                
                // multiple checkbox checked

                function is_check_fruite () {
                    if (isset($_GET['fruites']) && is_array($_GET['fruites']) && $_GET['fruites'] == 'on') {
                        echo 'checked';
                    }
                }

                
            ?>
            <form method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?= $fname; ?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?= $lname; ?>">

                <label>Select some fruits</label>

                <input type="checkbox" name="fruites[]" vlaue = "Orenge"<?php is_check_fruite();?>>
                <label class = "label-inline">orenge</label><br/>
                <input type="checkbox" name="fruites[]" vlaue = "Apple" <?php is_check_fruite();?>>
                <label class = "label-inline">Apple</label><br/>



                <button type="submit">Submit</button>

                <?php
                    print_r($_GET);
                ?>
            </form>
        </div>
    </div>
</div>





</body>
</html>