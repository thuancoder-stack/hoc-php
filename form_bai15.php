<?php
session_start();
if (isset($_POST['submit'])) {
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['city'])) {
    // đưa 3 cái này vào 1 mảng
    $data = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'city' => $_POST['city']
    ];
    
    // mỗi lần như vậy data sẽ được lưu vào session mẹ form
    if(!isset($_SESSION['form'])){
    $_SESSION['form'] = [];
    }
    $_SESSION['form'][] = $data;

    // kiểm tra xemm xem đã lưu vào session chưa
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";    
    }else{
        $err = "Bạn chưa nhập email, password và city";
    }
}
if (isset($_POST['delete'])) {
    unset($_SESSION['form']);

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
    <input type="text" name="city" placeholder="City">
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="delete" value="Delete">
    </form>
    <?php
     // hiện lỗi nếu chưa nhập
    if (isset($err)) {
        echo "<style> .err { color: red; } </style>";
        echo "<p class='err'>" . $err . "</p>";
    }
    // if (isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['city'])) {
    //     echo "<style> .success { color: green; } </style>";
    //     echo "<p class='success'>" . $_SESSION['email'] . "</p>";
    //     echo "<p class='success'>" . $_SESSION['password'] . "</p>";
    //     echo "<p class='success'>" . $_SESSION['city'] . "</p>";
        
    // }

    ?>
</body>
</html>