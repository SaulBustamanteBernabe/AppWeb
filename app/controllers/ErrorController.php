<?php

namespace app\controllers;

class ErrorController extends Controller {
    public function __construct() {
        
    }

    public function error404() {
        echo "ERRORCONTROLLER";
    }
}

?>