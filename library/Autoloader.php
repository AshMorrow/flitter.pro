<?php

class Autoloader
{

    private static $last_file_name;

    public static function load_class($class_name){


        foreach (PATH_AUTOLOADER AS $name => $path){
            if(file_exists($path.$class_name.'.php')){
                require_once ($path.$class_name.'.php');
                return;
            }

            throw new ErrorException('class not found');
        }
    }

}