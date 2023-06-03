<?php 
    session_start();
    include("db_connect.php"); 
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Web</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            body {
                background: #f7f7ff;
                margin-top: 20px;
            }
            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid transparent;
                border-radius: .25rem;
                margin-bottom: 1.5rem;
                box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
            }
            .me-2 {
                margin-right: .5rem !important;
            }
            .avatar-container {
                position: relative;
                display: inline-block;
            } 
            .avatar-change-icon {
                position: absolute;
                bottom: 0;
                right: 0;
                background-color: #ffffff;
                border-radius: 50%;
                padding: 5px;
                border: 1px solid black;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .avatar-change-icon i {
                color: #000000;
                cursor: pointer;
            }
            .form-popup {
                width: 100%;
                height: 100%;
                display: none;
                position: fixed;
                /* bottom: 0; */
                top: 0;
                left: 0;
                right: 15px;
                border: 3px solid #f1f1f1;
                background-color: rgba(0,0,0,0.4);
                z-index: 9;
            }
            .form-container {
                width: 30%;
                height: auto;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 10px;
                background-color: white;
            }
            .form-container input[type=text], .form-container input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
            }
            .form-container input[type=text]:focus, .form-container input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }
            .form-container .btn {
                background-color: #04AA6D;
                color: white;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                margin-bottom:10px;
                opacity: 0.8;
            }
            .form-container .cancel {
                background-color: red;
            }
            .form-container .btn:hover{
                opacity: 1;
            }
            input[type="file"] {
                display: none;
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function redirectToLink() {
                window.location.href = "http://localhost:8080/cmcweb/logout.php";
            }
            var modal = document.getElementById('myForm');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </head>
    <body> 
        <?php 
            if(!isset($_COOKIE["auth"])){$username = $_SESSION["username"];}
            if(isset($_POST["submit"])){
                $newName = $_POST["name"];
                $newAddress = $_POST["address"];
                $newPhone = $_POST["phone"];
                $newDescription = $_POST["description"];
                $sql = "update tbl_users set name = '".$newName."', address = '".$newAddress."', phone = '".$newPhone."', description = '".$newDescription."' where username = ".$_SESSION["username"];
                mysqli_query($conn, $sql);
            }
            if(isset($_POST["submit2"])){
                $old = $_POST["old_password"];
                $new = $_POST["new_password"];
                $query = "select password from tbl_users where password = '".md5($old)."'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) == 0){
                    echo "<script>alert('Wrong Password. Try again !!!')</script>";
                }
                else{
                    $sql = "update tbl_users set password = '".md5($new)."' where username = ".$_SESSION["username"];
                    mysqli_query($conn, $sql);
                   
                }
            }
            $query = "select * from tbl_users where username = '".$username."'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $username = $row["username"];
            $name = $row["name"];
            $description = $row["description"];
            $phone = $row["email"];
            $address = $row["address"];
            $image = $row["image"];
        ?> 
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="avatar-container">
                                        <img src="<?php echo $image; ?>" alt="Avatar" class="avatar-image rounded-circle p-1 bg-primary" style="width:7em; height:7em">
                                        <div class="avatar-change-icon" id="avatar-change-icon">
                                            <i class="fa fa-camera"></i>
                                        </div>
                                        <form action="cmcweb/check_upload.php" method="POST" enctype="multipart/form-data" id="avatar-form">
                                            <input type="file" id="avatar-upload" name="file" accept="image/*">
                                            <input type="submit" name="submit3" style="display: none;">
                                        </form>
                                    </div>
                                    <div class="mt-3">
                                        <h4><?php echo $name; ?></h4>
                                        <p class="text-secondary mb-1"> <?php echo $description; ?> </p>
                                        <p class="text-muted font-size-sm"> <?php echo $address; ?> </p>
                                        <button class="btn btn-primary" onclick='document.getElementById("myForm").style.display="block"'>Change Password</button>
                                        <button class="btn btn-outline-primary" onclick='redirectToLink()'>Logout</button>
                                    </div>
                                </div>
                                
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="user.php" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value='<?php echo $name; ?>' name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value='<?php echo $address; ?>' name="address">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value='<?php echo $phone; ?>' name="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Description</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value='<?php echo $description; ?>' name="description">
                                    </div>
                                </div>
                                <div class="row mb-3"></div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" name="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="form-popup" id="myForm">
            <form action="/cmcweb/user.php" class="form-container" method="POST">
                <span onclick="document.getElementById('myForm').style.display='none'" style="cursor:pointer" class="close" title="Close Modal">&times;</span>
                <h1 style="text-align:center">Change Password</h1>
                <label for="email"><b>Old Password</b></label>
                <input type="password" placeholder="Enter Old Password" name="old_password" required>
                <label for="psw"><b>New Password</b></label>
                <input type="password" placeholder="Enter New Password" name="new_password" required>
                <button type="submit" class="btn" name="submit2">Change</button>
            </form>
        </div>
        <script>
            document.getElementById('avatar-change-icon').addEventListener('click', function() {
                document.getElementById('avatar-upload').click();
            });
            const form = document.getElementById('avatar-form');
            const fileInput = document.getElementById('avatar-upload');
            fileInput.addEventListener('change', function(event) {
                const formData = new FormData();
                formData.append("file", event.target.files[0]);
                fetch("http://localhost:8080/cmcweb/check_upload.php", {
                    method: "POST",
                    body: formData,
                })
                .then(response => {
                    if (response.ok) {
                        console.log("Upload successful!");
                        location.reload();
                    } else {
                        console.error("Upload failed!");
                    }
                })
                .catch(error => console.error("Something went wrong!", error));
            });

        </script>
        <div><a href="http://localhost:8080/cmcweb/index.php"> Quay lại trang chủ</a></div>
    </body>
</html>
