<?php 
  include("classes/Main.php");
        session_start();

        if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {

            header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php");
        }

        $profileValue = Main::fatchProfile($_SESSION["email"], $_SESSION["password"]);
        $role = $profileValue["role"];

        if ($role !== 'admin') {
            header("Location: http://localhost/php/__new/assignment/Module-5/index.php");
        }
        $allUsers = Main::fatchValue();

        // editable users informations
        $name = $_GET["name"];
        $fileOpen = fopen("public/database/{$name}.json","r");
        $fileRead = fread($fileOpen, filesize("public/database/{$name}.json"));
        $jsonDecode = json_decode($fileRead, true);

        $name = $jsonDecode["name"];
        $email = $jsonDecode["email"];
        $password = $jsonDecode["password"];
        $role = $jsonDecode["role"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dot</title>
    <link rel="shortcut icon" href="../src/img/dot-favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php 
include("public/template/navbar.php");
include("public/template/sidebar.php");
?>
<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
       <div class="flex flex-col w-96 ">
        <h1 class="p-4 mb-8 shadow text-xl font-semibold">Users management</h1>
        <form class="space-y-4 md:space-y-6" action="./public/update-user.php" method="POST">
                        
            <div>
                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User name</label>
                <input type="text" name="name" id="name" placeholder="<?= $name;?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <input type="hidden" name="oldName" value="<?= $name;?>">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $email;?>" >
                <input type="hidden" name="oldEmail" value="<?= $email;?>">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                <input type="hidden" name="oldPassword" value="<?php echo $password?>">
            </div>
            <p class="text-sm text-red-600">
                            <?php
                                if ( isset($_GET["error"])) {
                                    echo $_SESSION["error"];
                                }
                            ?>
            </p>
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Role</label>
            <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option disabled>User Role</option>
                <option <?php echo ($role == "user")? "selected":""; ?> value="user">User</option>
                <option <?php echo ($role == "admin")? "selected":""; ?> value="admin">Admin</option>
            </select>
            <button type="submit" class="w-full text-white bg-sky-500 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
        </form>
    </div>
   </div>
</div>



</body>
</html>