<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- vòng lặp for tính tổng các số 1+1/2+1/3+...+1/n -->
    <?php
        $n = 10;
        $sum = 0;
        for($i = 1; $i <= $n; $i++){
            $sum += 1/$i;
        }
        echo "Tổng là: $sum";
    ?>
</body>
</html>