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
   <!------------------Product-->
   <section class="product">
    <div class="product-content">
        <div class="product-content-left">
            <div class="product-content-left-img">
                <img src="image/img1.jpg" alt="">
            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                <h1>ĐẦM ÔM HOA TIÊT HOA MS 4870033</h1>
                <p>MSP: 4870033</p>
                </div>
                <div class="product-content-right-product-price">
                <p>750.000<sup>d</sup></p>
                </div>
            </div>
            <div class="product-content-right-product-size"> <p style="font-weight: bold;">Size:</p>
                <div class="size">
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
                </div>
            </div>
            <div class="quantity">
                <p style="font-weight: bold;">Số lượng:</p> <input type="number" min="0" value="1">
                <p style="color: red;">Vui lòng chọn size</p> 
            </div>
            <div class="product-content-right-product-button"> 
                <button><i class="fas fa-shopping-cart"></i> <p><a href="cart.php">MUA HÀNG</a></p></button> 
                <button><p>TÌM TẠI CỬA HÀNG</p></button>
            </div>
        </div>

    </div>
   </section>
    </header>   
   </body>
</html>