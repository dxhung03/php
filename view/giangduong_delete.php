<?php 
      include("../model/control.php") ;
     $get_data = new data_giangduong();
      $delete = $get_data->delete_gd($_GET['del']);
      if ($delete) {
    echo "<script>alert('xoa thanh cong');</script>";
    echo "<script> window.location='../view/giangduong_select.php'</script>";
} else echo "error";
?>