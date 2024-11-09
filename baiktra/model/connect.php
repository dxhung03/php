<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "qlkhachhang";
$conn = new mysqli($severname, $username, $password, $dbname);
mysqli_query($conn, 'set names "utf8"');
if($conn -> connect_error){
    die("Ket noi that bai! ".$conn -> connect_error);
}
?>