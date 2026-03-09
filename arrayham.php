<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = [1, 2, 3, 4, 5];
    $assoc = ["Hoang" => 31, "Nam" => 41, "Minh" => 39];

    // 1. array_change_key_case() - chuyển key sang chữ HOA hoặc thường
    $result = array_change_key_case($assoc, CASE_UPPER); // CASE_LOWER = chữ thường

    // 2. array_combine() - trộn 2 mảng thành mảng kết hợp (keys + values)
    $keys   = ["a", "b", "c"];
    $values = [1, 2, 3];
    $result = array_combine($keys, $values);

    // 3. array_count_values() - đếm số lần xuất hiện của các phần tử
    $result = array_count_values([1, 2, 2, 3, 3, 3]);

    // 4. array_push() - thêm phần tử vào CUỐI mảng
    array_push($arr, 6, 7);

    // 5. array_pop() - xóa phần tử CUỐI mảng, trả về phần tử đã xóa
    $removed = array_pop($arr);

    // 6. array_pad() - kéo dãn mảng, dương = thêm vào cuối, âm = thêm vào đầu
    $result = array_pad($arr, 8, 0);  // thêm vào cuối
    $result = array_pad($arr, -8, 0); // thêm vào đầu

    // 7. array_shift() - xóa phần tử ĐẦU mảng, trả về phần tử đã xóa
    $removed = array_shift($arr);

    // 8. array_unshift() - thêm phần tử vào ĐẦU mảng
    array_unshift($arr, 0, -1);

    // 9. is_array() - kiểm tra biến có phải mảng không (true/false)
    $check = is_array($arr);

    // 10. in_array() - kiểm tra giá trị có tồn tại trong mảng không (true/false)
    $check = in_array(3, $arr);

    // 11. array_key_exists() - kiểm tra key có tồn tại trong mảng không (true/false)
    $check = array_key_exists("Hoang", $assoc);

    // 12. array_unique() - loại bỏ giá trị trùng lặp
    $result = array_unique([1, 2, 2, 3, 3, 3]);

    // 13. array_values() - chuyển mảng kết hợp sang mảng chỉ mục
    $result = array_values($assoc);

    // 14. unset() - xóa một phần tử trong mảng
    unset($arr[0]);

    // 15. sort() - sắp xếp TĂNG dần (mảng thường)
    sort($arr);

    // 16. rsort() - sắp xếp GIẢM dần (mảng thường)
    rsort($arr);

    // 17. asort() - sắp xếp TĂNG dần theo VALUE (mảng kết hợp)
    asort($assoc);

    // 18. arsort() - sắp xếp GIẢM dần theo VALUE (mảng kết hợp)
    arsort($assoc);

    // 19. ksort() - sắp xếp TĂNG dần theo KEY (mảng kết hợp)
    ksort($assoc);

    // 20. krsort() - sắp xếp GIẢM dần theo KEY (mảng kết hợp)
    krsort($assoc);

    // 21. array_merge() - gộp 2 mảng lại thành 1
    $result = array_merge($arr, [10, 11, 12]);

    // 22. array_slice() - tách mảng theo vị trí và số lượng
    $result = array_slice($arr, 0, 3); // bắt đầu từ index 0, lấy 3 phần tử

    // 23. array_map() - áp dụng hàm lên từng phần tử (không đổi key)
    $result = array_map('strtoupper', ["blue", "green", "red"]);

    // 24. array_sum() - tính tổng các phần tử trong mảng
    $total = array_sum($arr);

    // 25. count() - đếm số lượng phần tử trong mảng
    $total = count($arr);

    // 26. explode() - tách chuỗi thành mảng theo ký tự phân cách
    $result = explode(", ", "1, 2, 3, 4, 5");

    // 27. implode() - ghép mảng thành chuỗi theo ký tự phân cách
    $result = implode(", ", $arr);
?>
</body>
</html>