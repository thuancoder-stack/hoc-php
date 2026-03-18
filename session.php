<?php
//  1.Bắt buộc phải có ở ĐẦU file
session_start();
if (isset($_POST['submit'])) {
    // 2.Lưu session  
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}
// unset($_SESSION['username']);
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Lưu session">
        <br>
        <?php
        // 3.Lấy session ra dùng
        if (isset($_SESSION['username'])) {
            echo "Xin chào: " . $_SESSION['username'];
        }
        if (isset($_SESSION['email'])) {
            echo "<br>Email: " . $_SESSION['email'];
        }
        if (isset($_SESSION['password'])) {
            echo "<br>Mật khẩu: " . $_SESSION['password'];
        }
        ?>
    </form>
    
</body>
</html>