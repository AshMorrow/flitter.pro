<?php

/**
 * Created by PhpStorm.
 * User: koragg
 * Date: 24.12.16
 * Time: 22:54
 */
class Rendering
{
    public static $layout = 'main_layout';

    public static function render($content){

        return require_once VIEW_DIR.'layouts'.DS.self::$layout.'.phtml';

    }
}