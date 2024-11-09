<?php
        include('../model/control.php');
        $get_data = new data_giangduong();
        if(isset($_POST['submit'])){
            $insert_gd = $get_data->insert_gd($_POST['txtgd'], $_POST['txtname'],$_POST['txtmonday']);
            if($insert_gd){
                echo "<script>alert('Thanh cong')</script>";
            }else{
                echo "<script>alert('Khong thuc thi duoc')</script>";
            }
        }
        if(isset($_POST['txtup'])){
    $up_gd = $get_data->update_gd($_POST['txtname'],
    $_POST['txtgd'],
    $_POST['txtmd'],
    $_GET['up']);
    if ($up_gd) {
        echo "<script>alert('thanh cong');</script>";
        echo "<script> window.location='../view/giangduong_select.php'</script>";
    } else echo "error";
}
    ?>