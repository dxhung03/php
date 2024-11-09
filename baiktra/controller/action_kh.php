<?php
        include('../model/khachhang_control.php');
        $get_data = new data_khachhang();
        if(isset($_POST['submit'])){
            $insert_kh = $get_data->insert_kh($_POST['txtTen'], $_POST['txtgt'],$_POST['txtdc'],$_POST['txtdt'],$_POST['txtemail']);
            if($insert_kh){
                echo "<script>alert('Thanh cong')</script>";
                echo "<script> window.location='../view/khachhang_view.php'</script>";
            }else{
                echo "<script>alert('Khong thuc thi duoc')</script>";
            }
        }
        if(isset($_POST['btnup'])){
            $up_kh = $get_data->update_kh($_POST['txtTen'],
            $_POST['txtgt'],
            $_POST['txtdc'],
            $_POST['txtdt'],
            $_POST['txtemail'],
            $_GET['up']);
            if ($up_kh) {
                echo "<script>alert('thành công');</script>";
                echo "<script> window.location='../view/khachhang_view.php'</script>";
            } else echo "Khong thuc thi duoc";
        }
?>