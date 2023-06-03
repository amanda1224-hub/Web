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
    <section class="deliver">
        <div class="container">
            <div class="cart-top">
                <div class="cart-top-cart ">
                    <i class="fas fa-shopping-cart "></i>
                </div>
                <div class="cart-top-address">
                <i class="fas fa-map-marker-alt"></i> </div>
            <div class="cart-top-payment cart-top-item">
            <i class="fas fa-money-check-alt cart-top-item"></i>
            </div>

            
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                <p style="font-weight: bold;">Phương thức giao hàng</p> <div class="payment-content-left-method-delivery-item"> <input type="radio">
                <label for="">Giao hàng chuyển phát nhanh</label>
                </div>
                </div>
                <div class="payment-content-left-method-payment">
                <p style="font-weight: bold;">Phương thức thanh toán</p>
                </div>
                    <div class="payment-content-left-method-payment-item">
                        <input type="radio"> 
                        <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img"> 
                        <img src="image/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio"> 
                        <label for=""> Thanh toán bång thẻ ATM(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img"> 
                        <img src="image/vcb.png" alt="">
                    </div> 
                    <div class="payment-content-left-method-payment-item"> 
                        <input name="method-payment" type="radio"> 
                        <label for=""> Thu tiền tận nơi</label> 
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery-content-left-button row"> 
            <a href="cart.php"><span>&#171;</span><p>Quay lại giỏ hàng</p></a> 
            <button><p style="font-weight: bold;">THANH TOÁN </p></button> 
        </div>
        
    </section>
   </body>
</html>