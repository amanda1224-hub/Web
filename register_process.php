<?php

include("db_connect.php");

    require_once 'recaptchalib.php';
    $reCaptcha = new ReCaptcha('6LfLRUkmAAAAAKZI4Qr1orKgrhAJ8-zGH-W3Q35S');
    $response = null;
    
    if ($_POST['g-recaptcha-response']) {
        $response = $reCaptcha->verifyResponse(
          $_SERVER['REMOTE_ADDR'],
          $_POST['g-recaptcha-response']
      );
      
      if ($response != null && $response->success) {
          echo 'handle a successful';
      } else {
          echo $response->error;
      }
    }

// if(isset($_POST['submit'])){
$username = $_POST['username'];
$email = $_POST['email'];
$name = $_POST['name'];
$passwod = $_POST['passwod'];

$passwod = md5($passwod);
$sql1 = "select * from tbl_users where username='$username'";
$query1 = mysqli_query($conn, $sql1);
$result = mysqli_num_rows($query1);

if ($result == 0) {
   
    $sql = "insert into tbl_users (username,password,email,name) values ('$username','$passwod','$email','$name')";
    $query = mysqli_query($conn, $sql);

    $sql1 = "select * from tbl_users";

    $result = mysqli_num_rows($query1);
   
    ?>
    <script>
        alert("Register success")
        
    </script>
    <script>window.location.href = 'http://localhost:8080/cmcweb/login.php';</script>
    <?php
} else {
    ?>
    <script>
        alert("Register failure!Username existed")
        
    </script>
    <script>window.location.href = 'http://localhost:8080/cmcweb/register.php';</script>
    <?php
}
?>