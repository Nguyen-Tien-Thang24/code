<?php
$appName = "My PHP App";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title><?= $appName ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background: #f5f6f8;
      color: #333;
      line-height: 1.6;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 32px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    h1 {
      text-align: center;
      margin-bottom: 24px;
    }

    .section {
      margin-bottom: 20px;
    }

    .section h2 {
      font-size: 18px;
      margin-bottom: 8px;
    }

    .section p {
      font-size: 15px;
      text-align: justify;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Giới thiệu hệ thống</h1>
    <div class="section">
      <h2>1. Overview</h2>
      <p>
        Hệ thống được xây dựng bằng ngôn ngữ PHP nhằm phục vụ mục đích quản lý và
        vận hành dữ liệu một cách hiệu quả. Giao diện đơn giản, dễ sử dụng và
        phù hợp cho các đồ án học tập hoặc ứng dụng web cơ bản.
      </p>

      <div class="section">
        <h2>3. Technologies Used</h2>
        <p>
        Hệ thống sử dụng PHP thuần kết hợp với HTML và CSS. Cách <p>tiếp cận</p> này giúp
        người học nắm rõ luồng xử lý từ phía server. Đến <p>giao diện</p> người dùng
        mà không phụ thuộc vào framework phức tạp.
        </p>
      </div>
    </div>

    <div class="section">
      <h2>2. Main Features</h2>
      <p>
        Website cung cấp các chức năng cốt lõi như hiển thị dữ liệu. Quản <p>lý người dùng</p>,
        và hỗ trợ mở rộng thêm các nghiệp vụ khác trong tương lai. Mỗi <p>chức năng</p>
        được thiết kế rõ ràng để dễ dàng bảo trì và phát triển.
      </p>
    </div>
</body>

</html>