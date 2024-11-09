<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method ="post">
        ten chu ho : <input type="text" name="ten" id=""  value = "<?php if(isset($_POST['ten'])) echo $_POST['ten']?>" require><br><br>
        chi so cu : <input type="number" name="chisoc" id="chisoc" value = "<?php if(isset($_POST['ten'])) echo $_POST['chisoc']?>"  require><br><br>
        chi so moi : <input type="number" name="chisom" id="chisom" value = "<?php if(isset($_POST['ten'])) echo $_POST['chisom']?>"  require><br><br>
        don gia : <input type="number" name="dongia" id="dongia" value = "2000" readonly><br><br>
        so tien thanh toan : <input type="number" name="tientt" id="tientt" readonly><br><br>
        <input type="submit" name="submit" value="tinh">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $chisocu = (float)$_POST['chisoc'];
            $chisomoi = (float)$_POST['chisom'];
            $dongia =(float)$_POST['dongia'];
            $tientt = (float)$_POST['tientt'];
            $sotientt = ($chisomoi-$chisocu)*$dongia;
            echo "<script> document.getElementById('tientt').value = $sotientt </script>";
        }
    ?>
</body>
</html>