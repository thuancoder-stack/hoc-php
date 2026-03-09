<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- hàm explode() : tách chuỗi thành mảng -->
    
<body>
    <?php
    $str = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    $str = explode(", ", $str);
    print_r($str);
    echo "<br>";
    // giá trị trung bình của mảng
    $avg = array_sum($str) / count($str);
    echo $avg;
    echo "<br>";
    // 5 giá trị nhỏ nhất của mảng
    $a = sort($str);
    foreach($str as $key => $value){
        if($key < 5){
            echo $value;
            echo "<br>";
        }
    }
    // 5 giá trị lớn nhất của mảng
    foreach($str as $key => $value){
        if($key > count($str) - 6){
            echo $value;
            echo "<br>";
        }
    }
    ?>
</body>
</html>