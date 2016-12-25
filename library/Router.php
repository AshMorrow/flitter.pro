<?php

class Router
{
   public static function getPage($page_name){

       if($page_name == '') $page_name = '/';
       $pages = [
           '/' => 'main_page',
           'services' => 'services',
           'portfolio' => 'portfolio',
           'about' => 'about',
           'contacts' => 'contacts'


       ];

       if(array_key_exists($page_name,$pages)){
           return require (VIEW_DIR.$pages[$page_name].'.phtml');
       }else{
           return require (VIEW_DIR.'404.phtml');
       }

   }
}