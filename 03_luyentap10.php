<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <!-- tìm ra giá trị lớn nhất của 3 số $a, $b, $c -->
    <?php
    $a = 10;
    $b = 20;
    $c = 15;
    function findMax($sa, $sb, $sc) {
        if($sa > $sb && $sa > $sc) {
            return $sa;
        } else if($sb > $sa && $sb > $sc) {
            return $sb;
        } else {
            return $sc;
        }
    }
    $max = findMax($a, $b, $c);
    echo "Giá trị lớn nhất là: " . $max;
    ?>
</body>
</html>