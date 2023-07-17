<?php
namespace Instument;
// namespace Instument\Keyboard;
use \Instument\String\Guitter as Gui;
use \Instument\String\Mendalin as Men;
use \Instument\Keyboard\Piano as pi;

include('Guitter.php');
include('Mendalin.php');
include('Piano.php');

Gui::guitter();
Men::mendalin();
Pi::piano();

