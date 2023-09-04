<?php
    include_once 'controller.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        Controller::create($_POST);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column-25"></div>
            <div class="column" style="margin-top:20px;">
                <h1>Task Manager</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit alias aspernatur ut ullam tempore adipisci dolor incidunt, veniam, illum accusamus natus eum? Consectetur, fugiat est exercitationem et provident quasi velit distinctio architecto, tenetur nulla pariatur nisi!</p>
            </div>
            <div class="column-25"></div>
        </div>
        <h3>All Task</h3>
        <div class="row">
            <div class="column-25"></div>
            <div class="column column-50">
                <table>
                    <thead>
                        <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                         <input type="checkbox" id="checkbox" name="checkBos" value="Bike">
                        </td>
                        <td>Id</td>
                        <td>Task</td>
                        <td>Date</td>
                        <td>
                            <a href="#">Edit </a>|
                            <a href="#">Delete </a>|
                            <a href="#">Compleate</a>
                        </td>
                        </tr>
                    </tbody>
              </table>
            </div>
            <div class="column-25"></div>
        </div>
        <div class="row">
            <div class="column-25" style="width:200px">
                <select name="" id="">
                    <option>With Select</option>
                    <option>All Delete</option>
                </select>
            </div>
            <div class="column">
                <button id="selectAllSubmit">Submit</button>
            </div>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="column-50">
                <h3>Add Task</h3>
            </div>
        </div>

        <div class="row">
            <div class="column-50">
                <form method="POST">
                    <fieldset>
                        <label for="taskName">Task Name</label>
                        <input type="text" placeholder="Task" id="taskName" name="task">
                        <label for="date">Date</label>
                        <input type="text" placeholder="Date" id="date" name="date">
                        <input class="button-primary" type="submit" name="insert">
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

</body>
</html>