<?php
include ('connect.php');
class data_khachhang {
    public function select_kh(){
        global $conn;
        $sql = "select * from khachhang";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function select_kh_id($id_kh){
        global $conn;
        $sql = "select * from khachhang where id = '$id_kh'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_kh($tenkh, $gioitinh, $diachi, $dt, $email){
        global $conn;
        $sql ="insert into khachhang(tenkh, gioitinh, diachi, dt, email)
                values ('$tenkh', '$gioitinh', '$diachi', '$dt', '$email')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_kh($id_kh){
        global $conn;
        $sql="delete from khachhang where id='$id_kh'";
        $run=mysqli_query($conn, $sql);
        return $run; 
    }
    public function update_kh($tenkh, $gioitinh, $diachi, $dt, $email, $id_kh) {
        global $conn;
    $sql = "update khachhang set tenkh='$tenkh', gioitinh='$gioitinh', diachi='$diachi', dt='$dt', email = '$email' where id='$id_kh'";
    $run = mysqli_query($conn, $sql);
    return $run;
    }
}
?>
