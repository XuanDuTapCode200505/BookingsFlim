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
    <title>Đăng Nhập - CGV Cinemas</title>
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="icon" href="https://www.cgv.vn/media/favicon/default/cgvcinemas-vietnam-favicon.ico">
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
            <?php if(isset($_SESSION['user_id'])) { ?>
            <a href="logout.php">Đăng Xuất</a>
        <?php } else { ?>
            <a href="dangnhap.php">Đăng Nhập</a>
        <?php } ?>
        </nav>
    </div>

    <div class="login-form">
        <h2>Đăng Nhập</h2>
        <?php if(isset($_SESSION['register_success'])) { ?>
            <div class="success-message">Đăng ký thành công! Vui lòng đăng nhập.</div>
            <?php unset($_SESSION['register_success']); ?>
        <?php } ?>
        <?php if(isset($error)) { ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php } ?>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Đăng Nhập</button>
        </form>
        <p style="text-align: center; margin-top: 15px;">
            Chưa có tài khoản? <a href="dangky.php">Đăng ký ngay</a>
        </p>
    </div>
</body>
</html> 