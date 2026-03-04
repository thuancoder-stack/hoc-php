<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $err1 = "";
    $err2 = "";
    $err3 = "";
    $x = 0;
    if (isset($_POST['submit'])) {
        if (empty($_POST['username'])) {
            $err1 = "Vui lòng nhập username";
            $x = 2;
        }
        if (empty($_POST['password'])) {
            $err2 = "Vui lòng nhập password";
            $x = 2;
        } 
        if ($x!=2) {
            $err3 = "Đăng nhập thành công";
        }
    }
   
    ?>
    <form action="" method="post">  
        
        <input type="text" name="username" id="">
        <span style="color: red;"><?php echo $err1; ?></span>
        <br>
        <input type="password" name="password" id="">
        <span style="color: red;"><?php echo $err2; ?></span>
        
        <br>
        <button type="submit" name="submit">Login</button>
        <span style="color: red;"><?php echo $err3; ?></span>
        <?php
        echo "<br>";
        echo $_POST['username']."<br>";
        echo $_POST['password'];
        ?>
    </form>
</body>
</html>