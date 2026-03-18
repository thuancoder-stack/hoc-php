<?php
// khởi động session
session_start();
// lưu session

if (isset($_POST['submit'])) {
    // kiểm tra trước khi lưu
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }else{
        $err = "Bạn chưa nhập email và mật khẩu";
    }
}
if (isset($_POST['delete'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Lưu session">

    <input type="submit" name="delete" value="Xóa session">
    </form>
    <?php
    // hiện lỗi nếu chưa nhập
    if (isset($err)) {
        echo "<style> .err { color: red; } </style>";
        echo "<p class='err'>" . $err . "</p>";
    }
    // lấy session
    if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
        echo "Email: " . $_SESSION['email'];
        echo "<br>";
        echo "Mật khẩu: " . $_SESSION['password'];
        echo "<br>";
    } 
    ?>
</body>
</html>