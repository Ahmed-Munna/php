<?php
namespace Instument;
// namespace Instument\Keyboard;
use \Instument\String\Guitter as Gui;
use \Instument\String\Mendalin as Men;
use \Instument\Keyboard\Piano as pi;

spl_autoload_register(function($file) {
    $slug = str_replace("Instument\\", "", $file) . ".php";
    $slug = str_replace("\\" , "/" , $slug);
    include($slug);
});
// include('Guitter.php');
// include('Mendalin.php');
// include('Piano.php');

Gui::guitter();
Men::mendalin();
Pi::piano();

