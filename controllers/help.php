<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        echo 'We are inside Help<br>';
    }
    
    public function other($arg = false) {
        echo 'We are inside Other<br>';
        echo 'Optional: ' . $arg . '<br>';
        
        require_once 'models/help_models.php';
        $model = new Help_Model();
    }

}

