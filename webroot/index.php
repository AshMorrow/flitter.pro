<?php

try{

    require_once ('..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'path.php');
    require_once (LIB_DIR.'Autoloader.php');

    spl_autoload_register(array('Autoloader', 'load_class'));


}catch (Exception $exception){
    var_dump($exception);
}