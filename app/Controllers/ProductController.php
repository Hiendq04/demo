<?php 
    // namespace App\Controller;
    require_once "App\Models\Product.php";
    class ProductController {
        public function getAllProduct(){
            $productModel = new Product();
            $products = $productModel->listProduct();
            include "App\Views\products.php";
        }
    }
?>