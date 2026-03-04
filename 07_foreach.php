<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- truy xuất sinh viên từ 1 database -->
<?php
$students = array(
    array('name' => 'Nguyễn Văn Cường 1', 'email' => 'thehalfheart1@gmail.com', 'age' => '29'),
    array('name' => 'Nguyễn Văn Cường 2', 'email' => 'thehalfheart2@gmail.com', 'age' => '29'),
    array('name' => 'Nguyễn Văn Cường 3', 'email' => 'thehalfheart3@gmail.com', 'age' => '29'),
    array('name' => 'Nguyễn Văn Cường 4', 'email' => 'thehalfheart4@gmail.com', 'age' => '29'),
    array('name' => 'Nguyễn Văn Cường 5', 'email' => 'thehalfheart5@gmail.com', 'age' => '29'),
    array('name' => 'Nguyễn Văn Cường 6', 'email' => 'thehalfheart6@gmail.com', 'age' => '29'),
    );
?>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $value) { ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['age']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>