<?php 
  include("classes/Main.php");
        session_start();
        if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {

            header("Location: http://localhost/php/__new/assignment/Module-5/sign-in.php");
        }

        $profileValue = Main::fatchProfile($_SESSION["email"], $_SESSION["password"]);
                
        $name = $profileValue["name"];
        $email = $profileValue["email"];
        $role = $profileValue["role"];
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
    <h1 class="p-4 shadow text-xl font-semibold">Profile</h1>
    <?php if(isset($_GET["msg"]))  echo $_GET["msg"];?>
    <div class="p-4">
      <div class="flex">
        <div class="bg-white p-3 shadow-sm rounded-sm">
         <div class="text-gray-700">
            <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Name</div>
                    <div class="px-4 py-2"><?php echo $name; ?></div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Email</div>
                    <div class="px-4 py-2"><?php echo $email; ?></div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Role</div>
                    <div class="px-4 py-2"><?php echo $role;?></div>
                </div>
            </div>
         </div>
        </div>
      </div>
    </div>
   </div>
</div>

</body>
</html>