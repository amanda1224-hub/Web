
<?php
include("db_connect.php");



    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "select * from tbl_users where username = '" . $username . "' and password = '" . $password . "'";
    $select_query = mysqli_query($conn, $query);
    $result = mysqli_num_rows($select_query);
    if ($result > 0) {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: user.php");
    } else {
        ?>
        <script>
            alert("Login failure!")
        </script>
        <script>window.location.href = 'http://localhost:8080/cmcweb/login.php';</script>
    <?php
    }
    if (isset($_POST["remember"]) && $_POST["remember"] == "on") {
        $expire = time() + 30 * 24 * 60 * 60;
        setcookie("auth", "username", $expire, "/");
    }

?>










