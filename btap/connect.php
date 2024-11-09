<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "ql_ban_sua";
$conn = new mysqli($severname, $username, $password, $dbname);
if($conn -> connect_error){
    die("Ket noi that bai! ".$conn -> connect_error);
}
?>