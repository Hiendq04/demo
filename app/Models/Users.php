<?php 
    require_once "db.php";
    class Users extends db {
        public function listUser(){
            $sql = "SELECT * FROM users WHERE 1";

            return $this->getData($sql);
        }
    }
?>