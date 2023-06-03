<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="index.css">
    <title>Shop</title>
</head>
<body>
    <header>
       <div class="menu">
           <li><a href="">Nữ</a></li>
           
           <li><a href="">Nam</a></li>
           <li><a href="">Trẻ em</a></li>
       
       </div>
       <div class="others">
           <li><input placeholder="Tìm kiếm" type="text" <i class="fas fa-search"></i></li>
           <li><a class="fa fa-paw" href=""></a></li>
           <li><a class="fa fa-user" href=""></a></li>
           <li> <a class="fa fa-shopping-bag" href="" ></a></li>
       </div>
   
    </header>   

    <section class="cart">
        <div class="container">
            <div class="cart-top">
                <div class="cart-top-cart car-top-item">
                    <i class="fas fa-shopping-cart cart-top-item"></i>
                </div>
                <div class="cart-top-address">
                <i class="fas fa-map-marker-alt"></i> </div>
            <div class="cart-top-payment">
            <i class="fas fa-money-check-alt"></i>
            </div>
        </div>
        </div>
        <div class="container">
             <div class="cart-content">
                <div class="cart-content-left">
                    <table>
                        <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                        </tr>
                        <tr>
                            <td><img src="image/img1.jpg" alt="">
                            </td> 
                            <td><p>ĐẦM ÔM HOA TIÊT HOA MS 4870033</p></td> 
                            <td><img src="image/spcolor.png" alt="">
                                
                            </td> 
                            <td><p>L</p></td> 
                                <td><input type="number" value="1" min="1"></td> 
                                <td><p>489.000 <sup>d</sup></p></td>
                            <td><span>X</span></td>
                            </tr>
                        </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                        <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                        <td>TỔNG SẢN PHẨM</td>
                        <td><?php echo 1?></td>
                        </tr>
                        <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p>489.000 <sub>d</sub></p></td>
                        </tr>
                        <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="color: black; font-weight: bold;">489.000 <sub>d</sub></p></td>
                        </tr>
                    </table>
                    <div class="cart-content-right-button"> 
                        <button>TIẾP TỤC MUA SẮM</button>
                        <button><a href="http://localhost:8080/cmcweb/deliver.php">THANH TOÁN</a></button>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
   </body>
</html>