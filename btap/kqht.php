<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket qua hoc tap</title>
</head>
<body>
    <h1>Ket qua hoc tap</h1>
    <form action="" method="POST">
        Điểm HK1 : <input type="text" name="hk1" id="hk1" required><br>
        Điểm HK2 : <input type="text" name="hk2" id="hk2" required><br>
        Điểm TB : <input type="text" name="diemTB" id="diemTB" readonly><br>
        Kết quả : <input type="text" name="ketqua" id="ketqua" readonly><br>
        Xếp loại học tập : <input type="text" name="xeploai" id="xeploai" readonly><br><br>
        <input type="submit" name="submit" value="Xem kết quả">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $hk1 = floatval($_POST['hk1']);
        $hk2 = floatval($_POST['hk2']);
        $dtb = ($hk1 * 1 + $hk2 * 2) / 3;
        echo "<script>document.getElementById('diemTB').value = $dtb;</script>";
        if ($dtb >= 5) {
            echo "<script>document.getElementById('ketqua').value = 'Được lên lớp';</script>";
        } else {
            echo "<script>document.getElementById('ketqua').value = 'Ở lại lớp';</script>";
        }
        if ($dtb >= 8.5) {
            echo "<script>document.getElementById('xeploai').value = 'Giỏi';</script>";
        } elseif ($dtb >= 6.5) {
            echo "<script>document.getElementById('xeploai').value = 'Khá';</script>";
        } elseif ($dtb >= 5) {
            echo "<script>document.getElementById('xeploai').value = 'Trung bình';</script>";
        } else {
            echo "<script>document.getElementById('xeploai').value = 'Yếu';</script>";
        }
    }
    ?>
</body>
</html>