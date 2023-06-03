<?php 
    session_start();
    include("db_connect.php");
    if(!isset($_SESSION['username'])){header("Location: index.php");}
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES["file"])){
        $file_name = $_FILES['file']['name'];
        $file_temp = $_FILES['file']['tmp_name'];
        $target_dir = 'image/';
        $target_file = $target_dir . $file_name;
        if (move_uploaded_file($file_temp, $target_file)) {
            $query = "update tbl_users set image = '".$target_file."' where username = ".$_SESSION["username"];
            $result = mysqli_query($conn, $query);
        } else {
            echo "Error";
        }
    } 
?>