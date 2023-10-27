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
    <h1 class="p-4 mb-8 shadow text-xl font-semibold">Users management</h1>
    <div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
                <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Name</th>
                <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Email</th>
                <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Role</th>
                <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Action</th>
            </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <?php foreach($allUsers as $user) { ?>
                <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $user["name"]?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $user["email"]?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $user["role"]?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                <a href="update.php?name=<?php echo $user["name"]?>" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white mr-2 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Edit
                </a>
                <a href="public/delete.php?name=<?php echo $user["name"]?>" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                Delete
                </a>
                </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
   </div>
</div>



</body>
</html>