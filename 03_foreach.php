<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- in ra lần lượt các ký tự của chuổi -->
     <?php
        $str = "Hello World Thuan Nguyen";
        foreach(str_split($str) as $char){
            echo $char . " ";
        }
     ?>

</body>
</html>