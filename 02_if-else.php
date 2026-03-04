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
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $tb = ($toan + $ly + $hoa) ;
            if($toan == 1 || $ly == 1 || $hoa == 1){
                echo "Rot";
            }else if($tb >= 15){
                echo "Dau ";
            } else echo "Rot";
        }
    ?>
    <!-- kiemtra 3 mon toan, ly, hoa -->
     <form action="" method="post">
        <input type="text" name="toan" id="toan" placeholder="Điểm toán">
        <input type="text" name="ly" id="ly" placeholder="Điểm lý">
        <input type="text" name="hoa" id="hoa" placeholder="Điểm hóa">
        <button type="submit" name="submit">Check</button>
        <?php echo $_POST['toan']." - ".$_POST['ly']." - ".$_POST['hoa']  ; ?>
     </form>
    
</body>
</html>