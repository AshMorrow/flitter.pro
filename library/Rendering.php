<?php


class Rendering
{
    public static $layout = 'main_layout';

    public static function render($content){
        return require_once VIEW_DIR.'layouts'.DS.self::$layout.'.phtml';

    }
}