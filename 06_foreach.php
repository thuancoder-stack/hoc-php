<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- vòng lặp foreach bước nhảy 2 in ra số lẻ 1 - 100 -->
    <?php
        $arr = range(1, 100, 2);
        foreach($arr as $value){
            echo $value . " ";
        }
    ?>
</body>
</html>