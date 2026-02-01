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


  <div class="section">
    <h2>5. Development Direction</h2>
    <p>
      Trong tương lai, hệ thống có thể mở rộng thêm kết nối cơ sở dữ liệu MySQL,
      xây dựng mô hình MVC, bổ sung chức năng bảo mật và tối ưu giao diện
      để đáp ứng nhu cầu sử dụng thực tế.
    </p>
  </div>
</body>
</html>
