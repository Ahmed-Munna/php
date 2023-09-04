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
        <h1>File System</h1>
        <div class="column column-60 column-offset-20">

        <p>
            <?php


                if ($_FILES["photo"]) {

                    move_uploaded_file($_FILES["photo"]["tmp_name"],$_FILES["photo"]["name"]);

                }


            ?>
        </p>
            
            <form method="POST" enctype="multipart/form-data">
                
                <input type="file" name="photo" id="photo">
            

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>





</body>
</html>