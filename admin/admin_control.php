<?php
    include ('../connect.php');
    class data
    {

        function select_contact()
        {
            global $conn;
            $sql="select * from beach_contact ";
            echo $sql;
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function delete_contact($id_contact){
            global $conn;
            $sql="delete from beach_contact where id='$id_contact'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function update_contact($id_contact,$name_contact,$email_contact,$subject_contact,$mess_contact){
            global $conn;
            $sql="update beach_contact set name='$name_contact',email='$email_contact',subject='$subject_contact',mess='$mess_contact' where id='$id_contact'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        // rooms
        function select_rooms()
        {
            global $conn;
            $sql="select * from beach_rooms ";
            echo $sql;
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function select_rooms_id($id){
            global $conn;
            $sql="select * from beach_rooms where id ='$id'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }
        
        function delete_rooms($id_contact){
            global $conn;
            $sql="delete from beach_rooms where id='$id_contact'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function insert_room($name, $desc, $img, $rate) {
            global $conn;
            $sql="insert into beach_rooms(name, image, description, rate) values ('".$name."','".$img."','".$desc."','".$rate."')";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function update_rooms($id_rooms,$name, $img, $desc, $rate){
            global $conn;
            $sql="update beach_rooms set name='$name',image='$img',description='$desc',rate='$rate' where id='$id_rooms'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }
        
        // news
        function select_news(){
            global $conn;
            $sql = "SELECT * FROM beach_news ";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function insert_news($name, $cont, $img, $desc) {
            global $conn;
            $sql ="insert into beach_news(name, cont, img, des) values ('".$name."','".$cont."','".$img."','".$desc."')";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function update_news($id_news, $name, $cont, $img, $desc){
            global $conn;
            $sql = "update beach_news set name='$name',cont='$cont',img='$img',des='$desc' where id='$id_news'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function delete_news($id_news){
            global $conn;
            $sql = "DELETE from beach_news where id='$id_news'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        
        // foods
        function select_foods(){
            global $conn;
            $sql = "SELECT * FROM beach_foods ";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function insert_foods($name, $img, $desc) {
            global $conn;
            $sql ="insert into beach_foods(name,image,description) values ('".$name."','".$img."','".$desc."')";
            echo $sql . "<br />";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        function update_foods($id_foods, $name, $img, $desc){
            global $conn;
            $sql = "update beach_foods set name='$name',image='$img',description='$desc' where id='$id_foods'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function delete_foods($id_foods){
            global $conn;
            $sql = "DELETE from beach_foods where id='$id_foods'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        // divesite 
        function select_divesite(){
            global $conn;
            $sql = "SELECT * FROM beach_divesite";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function insert_divesite($name, $des, $img) {
            global $conn;
            $sql ="insert into beach_divesite(name,description,image) values ('".$name."','".$des."','".$img."')";
            $run=mysqli_query($conn, $sql);
            echo $run;
            return $run;
        }

        function update_divesite($id, $name, $img, $desc){
            global $conn;
            $sql = "update beach_divesite set name='$name',image='$img',desc='$desc' where id='$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        function delete_divesite($id){
            global $conn;
            $sql = "DELETE from beach_divesite where id='$id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

    }

?>