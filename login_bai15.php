<?php
session_start();
if (isset($_POST['submit'])) {
    if ($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']) {
        echo "Đăng nhập thành công";
    } else {
        echo "Đăng nhập thất bại";
    }
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
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
</body>
</html>