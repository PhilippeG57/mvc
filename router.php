<?php
    $request_uri = $_SERVER['REQUEST_URI'];
    echo $request_uri;
    
    if($request_uri == "/afpa/mvc/" OR $request_uri == "/afpa/mvc/home"){
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
    }elseif(...){
        
    }else{
        require_once 'views/error404.php';
    }