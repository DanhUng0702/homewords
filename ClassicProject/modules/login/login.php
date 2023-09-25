<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Đăng Nhập</p>
    <label for="username">tên đăng nhập</label>
    <input type="text" class="username" label="username"><br>
    <label for="password">mật khẩu</label>
    <input type="password" class="password" label="password">
    <form class="p-1" action="https://httpbin.org/anything" method="post">
    <label for="ngaysinh">Ngày sinh</label>
    <input type="date" name="ngaysinh" id="ngaysinh" value="2000-11-20">
    <button type="submit">Gửi</button>
</form>
</body>
</html>