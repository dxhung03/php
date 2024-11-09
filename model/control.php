<?php
    include ('connect.php');
    class data_giangduong{
        public function insert_gd($tengd, $tengv, $tenmd){
            global $conn;
            $sql ="insert into giangduong(tengiangduong, tengv, monday)
                    values ('$tengd', '$tengv', '$tenmd')";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function select_gd(){
            global $conn;
            $sql = "select * from giangduong";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function select_gd_id($id_gd){
            global $conn;
            $sql = "select from giangduong where id = '$id_gd'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
        public function delete_gd($id_gd){
            global $conn;
            $sql="delete from giangduong where id='$id_gd'";
            $run=mysqli_query($conn, $sql);
            return $run; 
        }
        public function update_gd($gd, $gv, $md, $id_gd) {
            global $conn;
        $sql = "update giangduong set tengv='$gv',tengiangduong='$gd',monday='$md' where id='$id_gd'";
        $run = mysqli_query($conn, $sql);
        return $run;
        }
        
    }

?>