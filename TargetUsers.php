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
    <h2>4. Target Users</h2>
    <p>
      Đối tượng hướng đến là sinh viên công nghệ thông tin, người mới học lập trình web,
      hoặc những ai cần một nền tảng PHP đơn giản để phát triển thêm các chức năng
      như đăng nhập, quản lý dữ liệu và phân quyền.
    </p>
  </div>
</body>
</html>
