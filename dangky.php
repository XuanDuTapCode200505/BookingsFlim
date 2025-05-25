<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: trangchu.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - CGV Cinemas</title>
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="icon" href="https://www.cgv.vn/media/favicon/default/cgvcinemas-vietnam-favicon.ico">
    <style>
        .register-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn-register {
            background-color: #e31837;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <span class="logo">
            <a href="trangchu.php">
                <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/cgvlogo.png" alt="CGV Logo">
            </a>
        </span>
        <nav>
            <a href="#">Phim</a>
            <a href="#">Rạp CGV</a>
            <a href="#">Thành Viên</a>
            <a href="#">Đăng Nhập</a>
        </nav>
    </div>

    <div class="register-form">
        <h2>Đăng Ký Tài Khoản</h2>
        <?php if(isset($error)) { ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php } ?>
        <form action="register_process.php" method="POST">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn-register">Đăng Ký</button>
        </form>
        <p style="text-align: center; margin-top: 15px;">
            Đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a>
        </p>
    </div>
</body>
</html> 