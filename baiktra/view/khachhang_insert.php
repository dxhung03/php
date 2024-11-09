<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm khách hàng mới</title>
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
            justify-content: space-between;
        }
        .button-container button {
            width: 48%;
        }
    </style>
</head>
<body>

<h2>Thêm khách hàng mới</h2>

<form action="../controller/action_kh.php" method = "post">
    <label>Tên khách hàng</label>
    <input type="text" id="txtTen" name="txtTen" required>

    <label>Giới tính</label>
        <input type="radio" name="txtgt" id="txtgt" value = "Nam">Nam
        <input type="radio" name="txtgt" id="txtgt" value = "Nữ">Nữ<br><br>
    <label >Địa chỉ</label>
    <input type="text" id="txtdc" name="txtdc" required>

    <label >Điện thoại</label>
    <input type="text" id="txtdt" name="txtdt" required>

    <label for="email">Email</label>
    <input type="text" id="txtemail" name="txtemail" required>

    <div class="button-container">
        <button type="submit" name="submit">Thêm mới</button>
        <button type="button" onclick="window.location='../view/khachhang_view.php'">Quay lại</button>
    </div>
</form>

</body>
</html>
