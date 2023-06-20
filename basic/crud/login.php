<?php

    session_start();
    require_once "function.php";
    if (isset($_GET["username"]) && isset($_GET["email"])) {

        $name  = $_GET["username"];
        $email = $_GET["email"];
        $selectedQuery = "SELECT COUNT(*) as loginSuccess    FROM 'emp_info' WHERE name='$name' and email='$email'";
        $select_result = mysqli_query($conn,$selectedQuery);
        $afterAssoc = mysqli_fetch_assoc($select_result);
    
        print_r($afterAssoc);

    }


?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <form method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <br>
        <input type="submit" value="Login">
    <br>
  </form>
</body>
</html>
