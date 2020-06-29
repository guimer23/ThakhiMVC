<?php
namespace App\Controllers;

class HomeController {   

    public function index() {         
        require_once _VIEW_PATH_ . 'header.php';
        require_once _VIEW_PATH_ .'home/index.php';
        require_once _VIEW_PATH_ . 'footer.php';
    }
}