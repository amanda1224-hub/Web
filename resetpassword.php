<?php
// Lấy thông tin từ form email
$email = $_POST['email'];

// Kiểm tra email có tồn tại trong cơ sở dữ liệu không
if ($user = getUserByEmail($email)) {
  // Tạo mã đặt lại mật khẩu
  $reset_token = generateResetToken();
  
  // Cập nhật mã đặt lại mật khẩu cho người dùng
  updateUserResetToken($user['id'], $reset_token);
  
  // Gửi email chứa mã đặt lại mật khẩu
  $to = $email;
  $subject = 'Đặt lại mật khẩu của tài khoản';
  $message = 'Chào ' . $user['name'] . ', bạn có thể đặt lại mật khẩu tại đường dẫn sau: http://example.com/reset-password.php?token=' . $reset_token;
  $headers = 'From: webmaster@example.com' . "\r\n" .
      'Reply-To: webmaster@example.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  
  echo 'Mã đặt lại mật khẩu đã được gửi đến email của bạn.';
} else {
  echo 'Email không tồn tại trong hệ thống.';
}
?>
