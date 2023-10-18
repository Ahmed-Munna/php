<?php

interface ActionHandelar {

    public function execute() : void;
}

#[Attribute]
class Setup {}

class CopyFile implements ActionHandelar {
    
    public string $fileNeme;
    public string $targetDirectory;

    #[Setup]
    public function fileExists(string $fileNeme) : bool {

        return true;
    }
    public function execute() : void {

    }
}

$copyFile = new CopyFile();

$a = $copyFile->fileExists("Hello");

echo $a;
