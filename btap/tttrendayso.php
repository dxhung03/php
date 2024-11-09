<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        so bat dau : <input type="number" name="sbd" value = "<?php if(isset($_POST['sbd'])) echo $_POST['sbd']?>" required><br><br>               
        so ket thuc : <input type="number" name="skt" value = "<?php if(isset($_POST['skt'])) echo $_POST['skt']?>" required><br><br>
        <input type="submit" name= "submit" value="tinh">
    </form>
    <?php
            if (isset($_POST['submit'])) {
                $sobd = $_POST['sbd'];
                $sokt = $_POST['skt'];
                $tong = 0;
                $tich = 1;
                $tongsochan = 0;
                $tongsole = 0;
                for ($i = $sobd; $i <= $sokt; $i++) {
                    $tong += $i;
                    $tich *= $i;
                    if ($i % 2 == 0) {
                        $tongsochan += $i;
                    } else {
                        $tongsole += $i;
                    }
                }
                echo "tong: $tong<br>";
                echo "tich: $tich<br>";
                echo "tong so chan: $tongsochan<br>";
                echo "tong so le: $tongsole<br>";
            }
            ?>
</body>
</html>