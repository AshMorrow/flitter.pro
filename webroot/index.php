<?php
try {

    require_once('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'path.php');
    require_once(LIB_DIR . 'Autoloader.php');

    spl_autoload_register(array('Autoloader', 'load_class'));

    $current_url = array_values(array_filter(explode('/',parse_url($_SERVER['REQUEST_URI'])['path'])));

    Menu::$current_url = (count($current_url) > 0)? $current_url[0]: '';


    ob_start();
    Router::getPage($current_url);
    $content = ob_get_clean();

    ob_start();
    if(count($current_url) > 0){
        Rendering::$layout = 'secondary_layout';
    }

    Rendering::render($content);
    echo ob_get_clean();


} catch (Exception $exception) {
    var_dump($exception);
}