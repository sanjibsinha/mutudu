<?php
namespace Hagudu\autoload;


$autoload_function = function($classname){
    $fileName = __DIR__ . "/" . "{$classname}.php";
    if(file_exists($fileName)){
        require_once "{$fileName}";
    }    
};