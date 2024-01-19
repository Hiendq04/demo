<?php 
    require_once "App\Models\Users.php";

    class UserController{
        public function getAllUser(){
            $userModel = new Users();
            $users = $userModel->listUser();
            include "App\Views\users.php";
        }
    }
?>