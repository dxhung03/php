<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
include("../model/control.php");
$get_data = new data_giangduong();
$select_giangduong_id = $get_data->select_gd_id($_GET['up']);
foreach ($select_giangduong_id as $i_gd)

?>

<form action="../controller/insertgd.php" method = "post">
        <h2>Dang ky giang duong</h2>
        giang duong : <select name="txtgd" id="">
                        <option value="<?php echo $id_gd['tengiangduong'];?>">
                                <?php echo $id_gd['tengiangduong']?>
                        </option>
                        <option value="">chon giang duong</option>
                        <option value="501">501</option>
                        <option value="502">502</option>
                        </select>
        giang vien : <input type="text" name ="txtname" value ="<?php echo $id_gd['tengv'];?>">
        mon day : <select name="txtmonday" id="">
                        <option value="<?php echo $id_gd['monday'];?>">
                                <?php echo $id_gd['monday']?>;
                        </option>
                        <option>Chon mon</option>
                        <option value="lap trinh php">lap trinh php</option>
                        <option value="csdl sql">csdl sql</option>
        </select>
        <input type="submit" name="txtup" value="Sửa">
        <a href="giangduong_select.php">Hiển thị</a>
    </form>
</body>
</html>