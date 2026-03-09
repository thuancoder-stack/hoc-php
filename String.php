<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Hello World Tôi tên là Nguyễn Văn A";
    echo $str;
    echo "<br>";
    // hàm explode : tách chuỗi thành mảng
    $str1 = "Hello World Tôi tên là Nguyễn Văn A";
    $str1 = explode(" ", $str1);
    print_r($str1);
    echo "<br>";
    // hàm implode : nối mảng thành chuỗi 
    $str2 = ["Hello", "World", "Tôi", "tên", "là", "Nguyễn", "Văn", "Thuần"];
    $str2 = implode(" ", $str2);
    echo $str2;
    echo "<br>";
    // hàm str_replace : thay thế chuỗi: tham số 1: chuỗi cần thay thế, tham số 2: chuỗi thay thế, tham số 3: chuỗi gốc
    $str3 = "Hello World Tôi tên là Nguyễn Văn A";
    $str3 = str_replace("Nguyễn", "Trần", $str3);
    echo $str3;
    echo "<br>";
    $str3 = "Hello World Tôi tên là Nguyễn Văn A";
    $str3 = str_replace(["Nguyễn", "Văn"], ["Trần", "Võ"], $str3);
    echo $str3;
    echo "<br>";
    // hàm str_split : tách chuỗi thành mảng
    $str4 = "Hello World Tôi tên là Nguyễn Văn A";
    $str4 = str_split($str4, 5);
    print_r($str4);
    echo "<br>";
    // hàm str_word_count : đếm số từ trong chuỗi
    $str5 = "Hello World Tôi tên là ";
    $count = str_word_count($str5);
    echo $count;
    echo "<br>";
    // hàm str_pad : thêm ký tự vào chuỗi
    $str6 = "Hello World";
    $str6 = str_pad($str6, 10, "*", STR_PAD_RIGHT);
    echo $str6;
    echo "<br>";
    // hàm str_repeat : lặp chuỗi
    $str7 = "Hello World ";
    $str7 = str_repeat($str7, 2);
    echo $str7;
    echo "<br>";
    // hàm str_shuffle : xáo trộn chuỗi
    $str8 = "Hello World";
    $str8 = str_shuffle($str8);
    echo $str8;
    echo "<br>";
    // hàm strlen : đếm độ dài trong chuỗi
    $str9 = "Hello World";
    $count = strlen($str9);
    echo $count;
    echo "<br>";
    // hàm substr() : cắt chuỗi : tham số 1: chuỗi gốc, tham số 2: vị trí bắt đầu, tham số 3: vị trí kết thúc
    $str10 = "Hello World";
    $str10 = substr($str10, 0, 5);
    echo $str10;
    echo "<br>";
    // hàm strpos : tìm vị trí chuỗi : tham số 1: chuỗi gốc, tham số 2: chuỗi cần tìm
    $str11 = "nam@gmail.com";
    $max_count = strlen($str11);
    $check_at = str_split($str11,1);
    $n_check_at = 0;
    print_r($check_at);
    echo "<br>";
    foreach($check_at as  $value){
        if($value == "@"){
            $n_check_at++;
        }
    }
    if(strpos($str11,"@")!==false && $n_check_at == 1){
        echo "Email hợp lệ";
    }else{
        echo "Email không hợp lệ";
    }
    echo "<br>";
    ?>
</body>
</html>