<?php

    $serverName = "localhost";
    $userName   = "root";
    $password   = "";
    $dbName     = "employees";

    // create database connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);

    // submit information from empolyees

    if (isset($_POST["submit"])) {

        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["address"]) || empty($_POST["phone"])) {

            $mass = "all are requered field..!";
            header("location:index.php?errorMass=".$mass);

        } else {

            $filteredName  = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            $filterEmail   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $filterAddress = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
            $filterPhone   = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);

            $insart = "INSERT INTO `emp_info`(`name`, `email`, `address`, `phone`) VALUES ('$filteredName ','$filterEmail','$filterAddress','$filterPhone')";
            $query = mysqli_query($conn,$insart);

            if ($query) {
                $success = "Info add done..!";
                header("location:index.php?suc=".$success);
            }

            

        }

    }

    // update user input

    if (isset($_POST["save"])) {

        if (empty($_POST["upName"]) || empty($_POST["upMail"]) || empty($_POST["upAddress"]) || empty($_POST["upNum"]) || empty($_POST["hidden"])) {

            $mass = "all are requered field..!";
            header("location:index.php?errorMass=".$mass);

        } else {

            $id = $_POST["hidden"];
            $filteredName  = filter_var($_POST["upName"], FILTER_SANITIZE_STRING);
            $filterEmail   = filter_var($_POST["upMail"], FILTER_SANITIZE_EMAIL);
            $filterAddress = filter_var($_POST["upAddress"], FILTER_SANITIZE_STRING);
            $filterPhone   = filter_var($_POST["upNum"], FILTER_SANITIZE_NUMBER_INT);

            $insart = "UPDATE `emp_info` SET name='$filteredName', email='$filterEmail', address='$filterAddress', phone='$filterPhone' WHERE id=$id";
            $query = mysqli_query($conn,$insart);

            if ($query) {
                $success = "Info add done..!";
                header("location:index.php?suc=".$success);
            }

            

        }

    }


    // delete single empolyee

    if (isset($_GET["deleteId"])) {

        $deleteUserId = $_GET["deleteId"];
        $deleteQuery  = "DELETE FROM `emp_info` WHERE id=$deleteUserId";
        $deleteConnection = mysqli_query($conn, $deleteQuery);

        $deleteMassege = "Delete Successfull";
        header("location:index.php?delsucc=".$deleteMassege);

    }

    // delete all empolyee

    if (isset($_GET["delAll"])) {

        $deleteUserId = $_GET["deleteId"];
        $deleteQuery  = "DELETE FROM `emp_info`";
        $deleteConnection = mysqli_query($conn, $deleteQuery);

        $deleteMassege = "Delete all Successfull";
        header("location:index.php?dellAll=".$deleteMassege);

    }









?>