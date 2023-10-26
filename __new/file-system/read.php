<?php

// $fo = fopen("all-file/aaa.json","r");
// $js = fread($fo, filesize("all-file/aaa.json"));

// $ar = json_decode($js, true);

// foreach ($ar as $key => $value) {
//     echo $key ." => ". $value . "</br>";
// }

// if (file_exists("all-file/aaa.json")) {
//     echo "yes";
// }

    // print_r(array_diff(scandir("../functions") , array(".","..")));
    
    if ((new FilesystemIterator("all-file"))->valid()) {

        echo "Yes";
    } else {
        echo "No";
    }
    
