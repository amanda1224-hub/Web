
<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="login.css">
	
</head>

<body>
	<div class="login-box">
		<h2>Login Form</h2>
		<form action="login_process.php" method="post" id="dmca-report-form">

			<label class="label-input" for="username">Username:</label>
			<!-- tạo ra một nhãn cho phần tử input, nó hiển thị 
		trước phần tử input và nó được liên kết với input bằng cách sử dụng thuộc tính for. -->
			<div class="user-box">
				<input type="text" id="username" name="username" required>
			</div>
			<!-- tạo ra một phần tử input cho người dùng nhập tên người dùng của họ. -->
			<label class="label-input" for="password">Password:</label>
			<div class="user-box">
				<input type="password" id="password" name="password" required>

			</div>
			<div class="user-box">
				<input type="checkbox" id="remember" name="remember">
				<label for="remember">Remember me</label>
			</div>
			
			
			<div id="g-recaptcha" data-callback="recaptchaCallback"></div>
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="user-box">
					
					<input type="submit" id="login" name="login" value="login" class="btn btn-success">
					
				</div>


				<!-- tạo ra một nút đăng nhập, khi người dùng nhấp vào 
		nút này thì biểu mẫu sẽ được gửi đến máy chủ để xử lý. -->
			</a>

		</form>

	</div>


	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<script>
// For captcha
var onloadCallback = function() {
    grecaptcha.render('g-recaptcha', {
        'sitekey' : '6LfLRUkmAAAAAKZI4Qr1orKgrhAJ8-zGH-W3Q35S'
    });
};
var recaptchaCallback = function () {
    let submit = document.getElementById('login')
    submit.classList.remove('disabled');
	
}
form = document.getElementById('dmca-report-form');
form.addEventListener('submit', function (e){
    if (grecaptcha && grecaptcha.getResponse().length !== 0) {
        this.submit();
    } else {
        alert('Please check captcha');
    }
    e.preventDefault();
})
</script>
	




</body>

</html>
