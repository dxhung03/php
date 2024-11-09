<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('../model/control.php');
$get_data=new data_giangduong();
$select=$get_data->select_gd();
?>

<table border="1">
    <tr>
        <td>ma gd</td>
        <td>ten giang duong</td>
        <td>ten mon hoc</td>
        <td>ten giang vien</td>
        <!-- <td>file mo ta</td> -->
        <td colspan="2">Tùy chọn </td>
    </tr>
    <?php
    foreach($select as $select_gd)
    {
    ?>
    <tr>
        <td><?php echo $select_gd['id'] ?></td>
        <td><?php echo $select_gd['tengiangduong'] ?></td>
        <td><?php echo $select_gd['monday'] ?></td>
        <td><?php echo $select_gd['tengv'] ?></td>
        <!-- <td><img src="Upload/<?php echo $select_gd['file'] ?>" width="20" height="20"></td> -->
        <td><a href="giangduong_update.php?up=<?php echo $select_gd['id'] ?>">Update</a></td>
        <td><a href="giangduong_delete.php?del=<?php echo $select_gd['id'] ?>" onclick="return(confirm('ban co muon xoa ?'))">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>