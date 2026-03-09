<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
 <!-- sort() : sắp xếp mảng tăng dần
 rsort() : sắp xếp mảng giảm dần
 asort() : sắp xếp mảng theo giá trị key tăng dần
 arsort() : sắp xếp mảng theo giá trị key giảm dần
 ksort() : sắp xếp mảng theo value tăng dần
 krsort() : sắp xếp mảng theo value giảm dần -->
<body>
    <?php
    $a = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
    asort($a);
    foreach($a as $x => $x_value){
        echo "Key: ".$x.", Value: ".$x_value;
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $a = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
    arsort($a);
    foreach($a as $x => $x_value){
        echo "Key: ".$x.", Value: ".$x_value;
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $a = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
    ksort($a);
    foreach($a as $x => $x_value){
        echo "Key: ".$x.", Value: ".$x_value;
        echo "<br>";
    }
    ?>
    <hr>
    <?php
    $a = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
    krsort($a);
    foreach($a as $x => $x_value){
        echo "Key: ".$x.", Value: ".$x_value;
        echo "<br>";
    }
    ?>

    
</body>
</html>