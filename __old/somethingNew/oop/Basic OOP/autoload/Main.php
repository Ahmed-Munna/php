<?php

function autoload($name) {
   include $name . ".php"; 
}
spl_autoload_register('autoload');

Mars::mars();
Moon::moon();
Earth::earth();