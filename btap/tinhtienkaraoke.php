<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        gio bat dau: <input type="text" name="giobd" id="giobd" value = "<?php if(isset($_POST['giobd'])) echo $_POST['giobd']?>" require><br><br>
        gio ket thuc : <input type="text" name="giokt" id="giokt" value = "<?php if(isset($_POST['giokt'])) echo $_POST['giokt']?>" require><br><br>
        tien thanh tan : <input type="text" name="tientt" id="tientt" readonly><br><br>
        <input type="submit" name ="submit" value="tinhtien">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $giobd = $_POST['giobd'];
            $giokt =$_POST['giokt'];
            $tientt =0;
            if($giokt > $giobd){
                if($giobd >= 10 && $giokt <= 24){
                    for ($i = $giobd; $i <= $giokt; $i++) {
                        if ($i >= 10 && $i <= 17) {
                            $tientt += 20000; 
                        } elseif ($i >= 17 && $i <= 24) {
                            $tientt += 45000; 
                        }
                    }
                    echo "<script> document.getElementById('tientt').value = $tientt </script>";
                } else {
                    echo "dang la gio nghi";
                }
            } else {
                echo "gio ket thuc phai lon gio bat dau";
            }
        }
    ?>
</body>
</html>