<?php 
      include("../model/khachhang_control.php") ;
     $get_data = new data_khachhang();
      $delete = $get_data->delete_kh($_GET['del']);
      if ($delete) {
    echo "<script>alert('xoa thanh cong');</script>";
    echo "<script> window.location='../view/khachhang_view.php'</script>";
} else echo "error";
?>