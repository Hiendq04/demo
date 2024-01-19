<?php

// use App\Controller\ProductController;

    require_once "App/Controllers/ProductController.php";
    $url = isset($_GET['url']) ? $_GET['url'] : '/' ;
    // echo $_GET['url'];die();

    switch($url){
        case '/':
            $productController = new ProductController();
            $productController -> getAllProduct();
            break;
        
        case '/users':
            $userController = new UserController();
            $userController -> getAllUser();
            break;
    }

?>