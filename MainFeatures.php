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
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
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

  </div>
   <div class="section">
    <h2>2. Main Features</h2>
    <p>
      Website cung cấp các chức năng cốt lõi như hiển thị dữ liệu, quản lý người dùng,
      và hỗ trợ mở rộng thêm các nghiệp vụ khác trong tương lai. Mỗi chức năng
      được thiết kế rõ ràng để dễ dàng bảo trì và phát triển.
    </p>
  </div>

</body>
</html>
 