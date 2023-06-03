<?php
$servername = "localhost"; // tên hoặc địa chỉ IP của database server
$username = "root"; // tên đăng nhập vào database
$password = ""; // mật khẩu đăng nhập vào database
$dbname = "cmcweb"; // tên của database

// kết nối đến database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

// đóng kết nối

?>
