<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket qua thi dai hoc</title>
</head>
<body>
    <h1>Ket qua thi dai hoc</h1>
    <form action="" method="POST">
        Toán: <input type="number" name="toan" required><br><br>
        Lý: <input type="number" name="ly" required><br><br>
        Hóa: <input type="number" name="hoa" required><br><br>
        Điểm chuẩn: <input type="number" name="diemchuan" required><br><br>
        Tổng điểm : <input type="text" name="diemtong" id ="diemtong" readonly><br><br>
        Kết quả thi : <input type="text" name="ketqua" id ="ketqua" readonly><br><br>
        <input type="submit" name="submit" value="Xem kết quả">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $toan = (float)$_POST['toan'];
        $ly = (float)$_POST['ly'];
        $hoa = (float)$_POST['hoa'];
        $diemchuan = (float)$_POST['diemchuan'];
        $tongdiem = $toan + $ly + $hoa;
            echo "<script>document.getElementById('diemtong').value = $tongdiem;</script>";
        if($tongdiem >= $diemchuan){
            echo "<script>document.getElementById('ketqua').value = 'Đậu';</script>";
        }else{
            echo "<script>document.getElementById('ketqua').value = 'Rớt';</script>";
        }
    }
    ?>
</body>
</html>