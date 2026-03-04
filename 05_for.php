<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!-- vòng lặp for trính tổng s=x*2 + x*4 + x*6 + ... + x*2n -->
    <?php
        $x = 2;
        $n = 5;
        $sum = 0;
        for($i = 1; $i <= $n; $i++){
            $sum += $x * (2 * $i);
        }
        echo "Tổng là: $sum";
    ?>
</body>
</html>