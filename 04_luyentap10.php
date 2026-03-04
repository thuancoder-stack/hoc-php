<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- kiểm tra 1-100 có số nào chia hết 40 không? -->
<?php
    $mang = range(1, 1000);
    function checkNumber($arr, $number) {
        foreach($arr as $value) {
            if($value % $number == 0) {
                echo $value . ", ";
            }
        }
    }
    $number = 40;
    echo "Các số chia hết cho $number là: ";
    $result = checkNumber($mang, $number);
?>
<body>
    
</body>
</html>