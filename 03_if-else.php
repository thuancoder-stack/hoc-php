<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $toan = (float)$_POST['toan'];
            $ly   = (float)$_POST['ly'];
            $hoa  = (float)$_POST['hoa'];
            $anh  = (float)$_POST['anh'];
            $van  = (float)$_POST['van'];
            $ls   = (float)$_POST['ls'];
            $tb = ($toan + $ly + $hoa + $anh + $van + $ls) / 6 ;
            $diem = [$toan, $ly, $hoa, $anh, $van, $ls];
            if ($toan < 0 || $toan > 10 || $ly < 0 || $ly > 10 || $hoa < 0 || $hoa > 10 
            || $anh < 0 || $anh > 10 || $van < 0 || $van > 10 || $ls < 0 || $ls > 10) {
                echo "Điểm không hợp lệ! Mỗi môn phải từ 0 đến 10.";
            } else 

            if($toan < 4 || $ly < 4 || $hoa < 4 || $anh < 4 || $van < 4 || $ls < 4){
                echo "Yeu";
            }else if($tb < 5){
                echo "Yeu";
            } else if($tb < 6.5){
                echo "Trung Binh";
            } else if($tb < 8){
                echo "Kha";
            } else {
                echo "Gioi";}
        }
    ?>
    <!-- tinh diem 6 mon toan, lys hoas, anh, van, lich su -->
    <form action="" method="post">
        <input type="text" name="toan" id="toan" placeholder="Điểm toán">
        <input type="text" name="ly" id="ly" placeholder="Điểm lý">
        <input type="text" name="hoa" id="hoa" placeholder="Điểm hóa">
        <input type="text" name="anh" id="anh" placeholder="Điểm anh">
        <input type="text" name="van" id="van" placeholder="Điểm văn">
        <input type="text" name="ls" id="ls" placeholder="Điểm lịch sử">
        <button type="submit" name="submit">Tinh xep hang</button>
        <?php echo $_POST['toan']." - ".$_POST['ly']." - ".$_POST['hoa']." - ".$_POST['anh']." - ".$_POST['van']." - ".$_POST['ls']  ; ?>       
    </form>
    
</body>
</html>