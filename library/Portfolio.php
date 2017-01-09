<?php

class Portfolio{


    public static $ignore = [];
    private static $thumbs_pass = WEBROOT_DIR.'img'.DS.'portfolio'.DS.'thumbs';
    public static $thumbs_web_pass = '/img/portfolio/thumbs/';
    public static $full_web_pass = '/img/portfolio/full/';

    public static function getImages(){

        $images = [
            'logo' => scandir(self::$thumbs_pass.DS.'logo'),
            'site' => scandir(self::$thumbs_pass.DS.'site'),
            'design' => scandir(self::$thumbs_pass.DS.'design')
        ];

        return $images;

    }

}