<?php

class View {

    function __construct() {
        echo 'this is a view<br>';
    }
    
    public function render($name) {
        require_once 'views/' . $name . '.php';
    }

}
