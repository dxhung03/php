<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #e7f1ff;
            padding: 10px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 15px;
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            display: none; 
        }
        th, td {
            border: 1px solid #000000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e7f1ff;
        }
        .action {
            text-align: center;
        }
        div {
            width: 100%;
            display: flex;          
        }
        .ds {
            text-align: center;
            width: 100%; 
        }
        .form-container {
            display: none; 
            max-width: 400px;
            margin: 20px auto;
            border: 1px solid #000000;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            width: 100%; 
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
            justify-content: space-between;
        }
        .button-container button {
            width: 48%;
        }
        .suakh-container{
            display : none;
        }
    </style>
    <script>
    function dskh() {
        document.getElementById('dskh').style.display = 'table';
        document.getElementById('themkh').style.display = 'none';
    }
    function themkh() {
            let formContainer = document.getElementById('themkh');
            let tableContainer = document.getElementById('dskh');
            if (formContainer.style.display === 'none' || formContainer.style.display === '') {
                formContainer.style.display = 'block';
                tableContainer.style.display = 'none'; 
            } else {
                formContainer.style.display = 'none';
            }
        }

    fucntion suakh(){
        let formContainer = document.getElementById('themkh');
        let tableContainer = document.getElementById('dskh');
        let suakh = document.getElementById('suakh');
            if (suakh.style.display === 'none' || suakh.style.display === '') {
                suakh.style.display = 'block';
                formContainer.style.display = 'none';
                tableContainer.style.display = 'none'; 
            }
    }
</script>
</head>
<body>
<?php
include('../model/khachhang_control.php');
$get_data = new data_khachhang();
$select = $get_data->select_kh();

?>
<header>
    <h1>Xin chào:</h1>
</header>
<div>
    <nav>
        <strong>Quản lý khách hàng</strong><br><br>
        <a onclick="dskh()">Danh sách khách hàng</a><br><br>
        <a onclick="themkh()">Thêm khách hàng mới</a><br><br>
        <strong>Quản lý sản phẩm</strong><br><br>
        <a href="#">Danh sách sản phẩm</a><br><br>
        <a href="#">Thêm sản phẩm mới</a><br><br>
        <a href="#">Hàng sản phẩm</a><br><br>
        <a href="#">Thêm hàng sản phẩm mới</a><br><br>
        <a href="#">Loại sản phẩm</a><br><br>
        <a href="#">Thêm loại sản phẩm mới</a><br><br>
        <strong>Quản lý bình chọn</strong><br><br>
        <a href="#">Danh sách bình chọn</a><br><br>
        <a href="#">Thêm bình chọn</a><br><br>
    </nav>
    <nav class="ds">
        <table id="dskh">     
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khách</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th colspan="2">Tùy chọn</th>
                </tr>
            </thead>
            <?php
            foreach ($select as $select_kh) {
            ?>
            <tbody>
                <tr>

                    <td><?php echo $select_kh['id'] ?></td>
                    <td><?php echo $select_kh['tenkh'] ?></td>
                    <td><?php echo $select_kh['gioitinh'] ?></td>
                    <td><?php echo $select_kh['diachi'] ?></td>
                    <td><?php echo $select_kh['dt'] ?></td>
                    <td><?php echo $select_kh['email'] ?></td>
                    <td><a href="khachhang_update.php?up=<?php echo $select_kh['id'] ?> " onclick ="suakh()">Sửa</a></td>
                    <td><a href="khachhang_delete.php?del=<?php echo $select_kh['id'] ?>" onclick="return(confirm('bạn có muốn xóa không ?'))">Xóa</a></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
        <div id="themkh" class="form-container">
        <h2>Thêm khách hàng mới</h2>
        <form action="../controller/action_kh.php" method="post">
            <label>Tên khách hàng</label>
            <input type="text" id="txtTen" name="txtTen" required>

            <label>Giới tính</label>
            <input type="radio" name="txtgt" value="Nam" required> Nam
            <input type="radio" name="txtgt" value="Nữ" required> Nữ<br><br>

            <label>Địa chỉ</label>
            <input type="text" id="txtdc" name="txtdc" required>

            <label>Điện thoại</label>
            <input type="text" id="txtdt" name="txtdt" required>

            <label>Email</label>
            <input type="text" id="txtemail" name="txtemail" required>

            <div class="button-container">
                <button type="submit" name="submit">Thêm mới</button>
                <button type="button" onclick="themkh()">Hủy</button>
            </div>
        </form>
    </div>
    <div id="suakh" class="suakh-container">
        <?php
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
    </div>
    </nav>
    
</div>
</body>
</html>
