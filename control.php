<?php 
    // include ('connect.php');
    class Data {
        private $_server="localhost";
        private $user="root";
        private $pass="";
        private $database="ltmt";
        private $conn;

        function connect(){
           $this->conn=mysqli_connect($this->_server, $this->user, $this->pass, $this->database);
        }
        
        function insert($name, $email, $subject, $mess) {
            $this->connect();
            
            $sql="insert into beach_contact(name, email, subject, mess) values ('".$name."','".$email."','".$subject."','".$mess."')";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        } 

        function select_contact(){
            $this->connect();
            $sql="select * from beach_contact";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function register($name, $pass, $email, $addr, $birth, $image, $sex, $hobby) {
            $this->connect();
            
            $sql="insert into beach_register(name,password, email, address,bithday,image,sex,hobby) values ('".$name."','".$pass."','".$email."','".$addr."','".$birth."','".$image."','".$sex."','".$hobby."')";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        } 

        function select_rooms()
        {
            $this->connect();
            $sql="select * from beach_rooms ";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function select_rooms_id($id){
            $this->connect();
            $sql="select * from beach_rooms where id ='$id'";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function login($name){
            $this->connect();
            $sql="select password from beach_register where name ='$name'";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function select_foods()
        {
            $this->connect();
            $sql="select * from beach_foods ";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function select_divesite()
        {
            $this->connect();
            $sql="select * from beach_divesite";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }

        function select_news()
        {
            $this->connect();
            $sql="select * from beach_news";
            $run=mysqli_query($this->conn, $sql);
            return $run;
        }
    }