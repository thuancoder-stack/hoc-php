<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
     <!-- Cho mảng $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
       Hãy viết hàm kiểm tra số 67 có nằm trong mảng không? -->

<body>
    <?php
        $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
        function checkNumber($arr, $number) {
            foreach($arr as $value) {
                if($value == $number) {
                    return true;
                }
            }
            return false;
        }
        if(checkNumber($mang, 67)) {
            echo "Số 67 có nằm trong mảng";
        } else {
            echo "Số 67 không nằm trong mảng";
        }
    ?>
</body>
</html>