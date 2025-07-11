<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CGV Cinemas</title>
    <link rel="stylesheet" href="css/trangchu.css" />
    <link
      rel="icon"
      href="https://www.cgv.vn/media/favicon/default/cgvcinemas-vietnam-favicon.ico"
    />
  </head>

  <body>
    <div class="header">
      <span class="logo">
        <a href="trangchu.php">
        <img
          src="https://www.cgv.vn/skin/frontend/cgv/default/images/cgvlogo.png"
          alt="CGV Logo"
        />
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
    <div class="content">
      <div class="service-menu">
        <div class="service-menu-item">
          <ul>
            <li>
              <a href="#1" class="service-menu-item-content">CGV Cinemas</a>
            </li>
            <li>
              <a href="#2" class="service-menu-item-content">Now Showing</a>
            </li>
            <li>
              <a href="#3" class="service-menu-item-content">CGV Special</a>
            </li>
            <li>
              <a href="#" class="service-menu-item-content">HallRental</a>
            </li>
            <li>
              <a href="#" class="service-menu-item-content">Contact CGV</a>
            </li>
            <li>
              <a href="#" class="service-menu-item-content">News & Offers</a>
            </li>
            <li>
              <a href="dangky.php" class="service-menu-item-content"
                >Register now</a
              >
            </li>
          </ul>
        </div>
        <div class="service-menu-showslide">
          <button class="prev">❮</button>
          <button class="next">❯</button>
          <ul>
            <li>
              <img
                src="https://iguov8nhvyobj.vcdn.cloud/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/c/g/cgv_980x448_1_.png"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://iguov8nhvyobj.vcdn.cloud/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/9/8/980wx448h_1_20.jpg"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://iguov8nhvyobj.vcdn.cloud/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/m/i/mi8_rolling_banner_20-2905.jpg"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://iguov8nhvyobj.vcdn.cloud/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/9/8/980x448px_6.jpg"
                alt=""
              />
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script src="js/slideshow.js"></script>
  </body>
</html> 