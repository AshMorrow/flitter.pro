<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__).DS);
define('CONF_DIR', ROOT.'config'.DS);
define('LIB_DIR', ROOT.'library'.DS);
define('CLASS_DIR', ROOT.'classes'.DS);
define('VIEW_DIR', ROOT.'views'.DS);
define('WEBROOT_DIR', ROOT.'webroot'.DS);

define('PATH_AUTOLOADER', [
    'libs' => LIB_DIR,
    'classes' => CLASS_DIR
]);
