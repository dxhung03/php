<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/insertgd.php" method = "post">
        <h2>Dang ky giang duong</h2>
        giang duong : <select name="txtgd" id="">
                        <option value="">chon giang duong</option>
                        <option value="501">501</option>
                        <option value="502">502</option>
                        </select>
        giang vien : <input type="text" name ="txtname">
        mon day : <select name="txtmonday" id="">
                        <option>Chon mon</option>
                        <option value="lap trinh php">lap trinh php</option>
                        <option value="csdl sql">csdl sql</option>
        </select>
        <input type="submit" name="submit" value="Dang ky">
    </form>
    
</body>
</html>