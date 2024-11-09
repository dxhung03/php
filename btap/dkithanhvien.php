<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Form dang ky</h2>
    <form  method="post">
        Username : <input type="text" name="tk" required><br><br>
        Password : <input type="password" name="mk" required><br><br>        
        Ho Ten : <input type="text" name="ten" required><br><br>
        Email : <input type="email" name="email" required><br><br>
        <input type="submit" name="dk" value="Dang ky">
    </form>
    <?php
        if (isset($_POST['dk'])) {
            $username = $_POST['tk'];
            $password = $_POST['mk']; 
            $hoten = $_POST['ten'];
            $email = $_POST['email'];
            include 'connect.php';
            $sql = "INSERT INTO khach_hang (ma_khach_hang, ten_khach_hang, email) 
                    VALUES ('$username', '$hoten', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Dang ky thanh cong";
            } else {
                echo "Dang ky that bai!".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    ?>
</body>
</html>