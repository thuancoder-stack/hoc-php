<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    print_r($a);
    echo "<br>";
    $upper = array_map("strtoupper", $a);
    print_r($upper);
    echo "<br>";
    $lower = array_map("strtolower", $a);
    print_r($lower);
    echo "<br>";
    ?>
</body>
</html>