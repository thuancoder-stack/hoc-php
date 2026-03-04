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
        $name = "Hello World Thuan Nguyen";
        for($i = 0; $i < strlen($name); $i++){
            echo $name[$i] . " ";
        }
    ?>
</body>
</html>