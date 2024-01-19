<?php 
    require_once "db.php";
    class Product extends db {
        public function listProduct(){
            $sql = "SELECT * FROM products WHERE 1";

            return $this->getData($sql);
        }
    }
?>
