<?php
try {

    require_once('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'path.php');
    require_once(LIB_DIR . 'Autoloader.php');

    spl_autoload_register(array('Autoloader', 'load_class'));

    $current_page = strtolower(str_ireplace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']));
    Menu::$current_page = $current_page;

    ob_start();
    Router::getPage($current_page);
    $content = ob_get_clean();
    ob_start();
    if($current_page != ''){
        Rendering::$layout = 'secondary_layout';
    }
    Rendering::render($content);
    echo ob_get_clean();


} catch (Exception $exception) {
    var_dump($exception);
}