<?php

class Bootstrap {

    function __construct() {
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        if(empty($url[0])) {
            require_once 'controllers/index.php';
            $controller = new Index();
            return FALSE;
        }
        
        $file = 'controllers/' . $url[0] . '.php';
        
        if(file_exists($file))
        {
            require_once ($file);
        } else {
            require_once 'controllers/error.php';
            $controller = new Error();
            return false;
        }
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}

