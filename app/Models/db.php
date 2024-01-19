<?php 
    class db {
        protected $severname="localhost";
        protected $dbname="oop";
        protected $username="root";
        protected $password="";
        //Kết nối với CSDL
        public function getConnect() {
            $connect = new PDO(
                "mysql:host=" . $this->severname
                . ";dbname=" . $this->dbname,
                $this->username,
                $this->password
            );

            return $connect;
        }

        //Thực hiện truy xuất dữ liệu từ db
        public function getData($query) {
            $conn = $this->getConnect();    //Khởi tạo kết nối CSDL
            $stmt = $conn ->prepare($query);    //Truyền câu truy vấn
            $stmt->execute();   //Thực hiện câu truy vấn

            return $stmt->fetchAll();
        }
    }
?>