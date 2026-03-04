<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<!-- mảng php = mang js + object js -->
	<!-- mang js: key tu dong tao ra
	obj js : key do minh tạo ra-->

	<?php 

	// khai bào 1 mảng
	$mang = [];

	// thêm gia tri vào mảng

	$mang[] = "hoc bai 11111";
	$mang[] = "hoc bai 22222";
	$mang['demo1'] = "hoc bai 1";
	$mang['demo2'] = "hoc bai 2";

	$mang[] = "hoc bai 3";
    $mang[] = "hoc bai 4";
	$mang['demo3'] = "hoc bai 3";

	$mang['dacap'][] = "đa cấp 12344667";

	$mang['dacap'][] = "đa cấp 2";
	$mang['dacap'][] = "đa cấp 3";
	$mang['dacap'][] = "đa cấp 4";

	echo "<pre>"; //mảng xuong dòng
	var_dump($mang); // xem mảng


	// echo $mang[2];
	// key:
	// - tự động tạo ra, bắt đầu = 0 va tăng lên
	// - do minh tạo ra


	// de lấy giá tri trong mảng ra: tên-mang[key][key]...
	// echo $mang['dacap'][1];	

	// đểm mảng
	// echo count($mang);


	// lấy hết các value trong mảng ra 
	for ($i=0; $i < count($mang) ; $i++) { 
		// echo $mang[$i]."<br>"; 
		// $mang[0]
		// $mang[1]
		// ... 
		// $mang[5]
	}
?>

<table>
<?php
	// map
	foreach ($mang as $key => $value) { 
        echo $key."---"; //key cha
		// var_dump ($value)."<br>";//value cha

		// echo $value."<br>";
		var_dump($value[0]);
	}
?>
		
	
	

</table>




</body>
</html>