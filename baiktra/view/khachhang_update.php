<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa khách hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #000000;
        }
        form {
            max-width: 400px;
            margin: auto;
            border: 1px solid #000000;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #000000;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #FF0000;
        }
        .button-container {
            display: flex;
            text-align: center;
        }
        .button-container button {
            width: 48%;
        }
    </style>
</head>
<body>
<?php 
include("../model/khachhang_control.php");
$get_data = new data_khachhang();
if (isset($_GET['up'])) {
    $select_kh_id = $get_data->select_kh_id($_GET['up']);
    foreach ($select_kh_id as $id_kh)
    {
?>
<h2>Sửa khách hàng</h2>
<form action="../controller/action_kh.php?up=<?php echo $_GET['up']; ?>" method="post">
    <label>Tên khách hàng</label>
    <input type="text" id="txtTen" name="txtTen" value="<?php echo $id_kh['tenkh']; ?>">
    
    <label>Giới tính</label>
    <input type="radio" name="txtgt" id="txtgt" value="Nam" <?php if ($id_kh['gioitinh'] == 'Nam') echo 'checked'; ?>> Nam
    <input type="radio" name="txtgt" id="txtgt" value="Nữ" <?php if ($id_kh['gioitinh'] == 'Nữ') echo 'checked'; ?>> Nữ<br><br>

    <label>Địa chỉ</label>
    <input type="text" id="txtdc" name="txtdc" value="<?php echo $id_kh['diachi']; ?>">

    <label>Điện thoại</label>
    <input type="text" id="txtdt" name="txtdt" value="<?php echo $id_kh['dt']; ?>">

    <label>Email</label>
    <input type="text" id="txtemail" name="txtemail" value="<?php echo $id_kh['email']; ?>">

    <div class="button-container">
        <button type="submit" name="btnup">Sửa</button>
    </div>
</form>
<?php
    }
}
?>
</body>
</html>
