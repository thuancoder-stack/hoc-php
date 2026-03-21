<!-- upload.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php
        // Xem thông tin file được upload
        echo "<pre>";
        var_dump($_FILES);
    ?>
    <!-- upload file -->
    <?php
    if (isset($_POST['uploadclick'])) {
        
        if (!empty($_FILES['avatar']['name'])) {
            
            // Lấy thông tin file
            $name     = $_FILES['avatar']['name'];       // tên file
            $type     = $_FILES['avatar']['type'];       // kiểu file (image/png,...)
            $tmp_name = $_FILES['avatar']['tmp_name'];   // file tạm
            $error    = $_FILES['avatar']['error'];      // 0 = không lỗi
            $size     = $_FILES['avatar']['size'];       // byte

            // Kiểm tra lỗi
            if ($error > 0) {
                echo "File Upload Bị Lỗi!";
            } else {
                // Di chuyển file từ tạm -> folder upload
                move_uploaded_file($tmp_name, './upload/' . $name);
                echo "File Uploaded!";
            }

        } else {
            echo "Bạn chưa chọn file upload!";
        }
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form> 
</body>
</html>