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
        $number = $_POST['number'];
        if($number % 7 == 0){
            echo "$number is divisible by 7";
        }else{
            echo "$number is not divisible by 7";
        }
    }; 
?>   
<!-- // check a number % 7 ? -->
<form action="" method="post">
        <input type="text" name="number" id="number">
        <button type="submit" name="submit">Check</button>
        <?php echo $_POST['number']." % 7 ? divisible : not divisible"  ; ?>
</form>

</body>
</html>