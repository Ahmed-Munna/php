<?php
    
    /*
        $my_array = array(
            "Uttom",
            "Shuvo",
            "Shiblu",
            "Munna vau",
            "Mayabi"
        );

        $some = array_pop($my_array);
        $some = array_shift($my_array);
        $some = array_push($my_array, "Dabasish");
        $some = array_unshift($my_array, "Dabasish");

        $c = count($my_array);

        for ($i = 0; $i < $c; $i++ ) {

            echo $my_array[$i];?> <br/> <?php 

        }
    */

    /*

        $as_array = [

            'Name' => "Anisha, Munna Vau",
            'Department' => "EEE, CSE"

        ];

        foreach ($as_array as $key=>$value) {

            echo $key . " => " . $value; 
            
        }
    
    */


    // $friends = explode(', ','Shuvo, Uttom, Shiblu, Bishu, Debashish');

    //$friends = preg_split("/, | ,|,/","Shuvo,Uttom ,Shiblu, Bishu,Debashish");

    // $toSring = join(', ', $friends);
    

    //var_dump($friends);

    
    // $arr = [
    //     [1,2,3,4],
    //     [11,22,[2,3,45,3]],
    //     [333,444,5555,[33,44,[33,23,44,[9,0]]]]
    // ];

    // echo $arr[2][3][2][3][0];
    

    // $info = [
    //     'Name' => 'Munna',
    //     'Id' => 1030,
    //     'Department' => 'CSE'
    // ];

    //$infoSereali = serialize($info);

    //echo $infoSereali;

    // $infoUnserealize = unserialize($infoSereali);

    // print_r($infoUnserealize);

    // $jesData = json_encode($info);
    // $jesDeco = json_decode($jesData,true);

    // echo $jesData;
    // print_r($jesDeco);


    // unset($info['Department']);

    // print_r($info);




    $Char = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
    $rand = [
        'A' => 15,
        'B' => 50,
        'C' => 10,
        'D' => 50,
        'E' => 62,
        'F' => 40
    ];

    // $arrSlice = array_slice($Char, 2, -1); 
    $arrSlice = array_slice($rand, 2, -1, true);

    print_r($arrSlice);





?>