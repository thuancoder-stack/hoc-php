<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tao một mảng gồm các phần tử từ 1 đến 100.
      Hãy tìm vị trí các số chia hết cho 3 trong dãy, va in ra vi tri do -->

    <?php
    $mang = range(1, 100);
    function checkNumber($arr, $number) {
        foreach($arr as $key => $value) {
            if($value % $number == 0) {
                echo "[" . $key . "], ";
            }
        }
    }
    $number = 3;
    echo "Vị trí của số chia hết cho $number là: ";
    $result = checkNumber($mang, $number);
    ?>
</body>
</html>