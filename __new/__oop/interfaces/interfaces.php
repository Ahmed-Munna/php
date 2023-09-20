<?php

// create a crud oparation

interface ModelA {
    public static function create($data);
    public static function read($data);
}

interface ModelB {
    public static function show($data);
    public static function update($data);

    const DontKnowWhatShouldIwrite = "slkd";
}

interface ModelC extends ModelA, ModelB {
    public static function delete($id);
}

// CRUD oparation here

class Oparation implements ModelC {
    
    private static $createData,
                    $readData,
                    $showData,
                    $updateData,
                    $deleteData;


    public static function create($data) {

        self::$createData = $data;
        $txt = self::DontKnowWhatShouldIwrite;
        return self::$createData . " is created, $txt";
    }

    public static function read($data) {

        self::$readData = $data;

        return self::$readData . " is readed";
    } 
    public static function show($data) {
    
        self::$showData = $data;
    
        return self::$showData . " is showed";
    }
    public static function update($data) {
    
        self::$updateData = $data;
    
        return self::$updateData . " is Updated";
    }

    public static function delete($id) {

        self::$deleteData = $id;

        return self::$deleteData . " is Deleted..";
    }

}

class OparationTwo extends Oparation {


}

echo OparationTwo::create("Munna");
echo Oparation::create("Vau");