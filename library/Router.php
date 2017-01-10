<?php

class Router
{
    public static function getPage($page_url)
    {

        $page_url_count = count($page_url);


        if ($page_url_count == 0) {

            $page_name = '/';

        } else if ($page_url_count < 2) {

            $page_name = $page_url[0];

        } else {

            $page_name = implode('/', $page_url);

        }

        $pages = [
            '/' => 'main_page',
            'services' => 'services',
            'portfolio' => 'portfolio',
            'about' => 'about',
            'contacts' => 'contacts'
        ];

        $multi_level = [

            'services/design' => 'services' . DS . 'design',
            'services/sites' => 'services' . DS . 'sites',

            'services/sites/landing' => 'services' . DS . 'sites'. DS . 'landing',
            'services/sites/site-card' => 'services' . DS . 'sites'. DS . 'site-card',
            'services/sites/corporate-websites' => 'services' . DS . 'sites'. DS . 'corporate-websites',

            'services/design/web-design' => 'services' . DS . 'design'. DS .'web-design',
            'services/design/logotypes' => 'services' . DS . 'design'. DS .'logotypes',
        ];

            if ($page_url_count > 1 && array_key_exists($page_name, $multi_level)){
                $view_path = VIEW_DIR . $multi_level[$page_name] . '.phtml';

                if(static::checkViewExists($view_path)){
                    return require($view_path);
                }else{

                    static::errorPages('404');
                }

            }else if ($page_url_count < 2 && array_key_exists($page_name, $pages)) {
                $view_path = VIEW_DIR . $pages[$page_name] . '.phtml';
                if(static::checkViewExists($view_path)){
                    return require(VIEW_DIR . $pages[$page_name] . '.phtml');
                }else{
                    static::errorPages('404');
                }

            } else {
                static::errorPages('404');
            }

    }

    private static function checkViewExists($view_path){
        return file_exists($view_path);
    }

    private static function errorPages($code){

        $errors = [

            '404' => VIEW_DIR . '404.phtml'

        ];

        if(array_key_exists($code,$errors)){
            return require($errors[$code]);
        }else{
            throw new Exception('error not fount in array');
        }
    }
}