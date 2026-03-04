<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- // in ra 0 - 100 chẵn -->
    <?php
        $arr = range(0, 100); //ngẫn cách tạo mảng từ 0 đến 100
        foreach($arr as $value){
            if($value % 2 == 0){
                echo "Số chẵn: $value <br>";
            }
        }
    ?> 
</body>
</html>