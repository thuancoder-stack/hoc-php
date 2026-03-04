<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tìm phần tử lớn nhất trong mảng -->
    <?php
        $arr = [1, 23, 32, 5, 43, 321, 312, 352, 2, 13, 153,
        21, 32, 1];
        $max = $arr[0];
        for($i = 1; $i < count($arr); $i++){
            if($arr[$i] > $max){
                $max = $arr[$i];
            }
        }
        echo "Phần tử lớn nhất trong mảng là: $max";
    ?>
</body>
</html>