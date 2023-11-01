<?php

// $file_path = 'index.txt';

// // Open the file
// $file = fopen($file_path, 'r');

// if ($file) {
//     // Read the content of the file
//     $fileGet = fgets($file);

//     // Display each line of the file
//     echo $fileGet; 


//     // Close the file
//     fclose($file);
// } else {
//     echo "Failed to open the file.";
// }


$file_path = 'index.txt';
$data = "I'm Munna, from Savar.";

// Open the file in append mode
$file = fopen($file_path, 'a');

if ($file) {
    // Write the data to the file
    fwrite($file, $data . PHP_EOL); 

    // Close the file
    fclose($file);
    echo "successfully.";
} else {
    echo "Failed";
}