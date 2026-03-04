<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- vòng lặp foreach trính tổng s=x*2 + x*4 + x*6 + ... + x*2n -->
    <?php
    $n = 5;
    $x = 2;
    $sum = 0;
    $arr_numbers = range(1, $n);
    foreach($arr_numbers as $i){
        $sum += $x * 2 * $i;
    }
    echo "Tổng là: $sum";
    ?>
    
</body>
</html>