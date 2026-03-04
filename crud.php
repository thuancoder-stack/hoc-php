<!-- <?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "testdb";

// Kết nối MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra lỗi
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thêm dữ liệu
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
}

// Xóa dữ liệu
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
}
?>

<h2>Thêm người dùng</h2>
<form method="post">
    Tên: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <button type="submit" name="add">Thêm</button>
</form>

<h2>Danh sách người dùng</h2>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Email</th>
    <th>Hành động</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td><a href='?delete={$row['id']}'>Xóa</a></td>
    </tr>";
}
?>

</table> -->