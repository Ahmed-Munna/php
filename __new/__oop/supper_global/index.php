<?php
    include("fileVar.php");

    if (isset($_POST["submit"])) {
        FileVar::fileInformations($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    
    <form action="fileVar.php" enctype="multipart/form-data" method="post">
        <!-- <input type="file" name="user-file" id="file"> -->
        <input type="text" name="name" id="">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <pre>
        <?php 

            if (isset($_GET)) {
                print_r($_GET);
            }
        ?>
    </pre>
</body>
</html>