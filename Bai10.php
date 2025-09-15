<?php
function tinhTrungBinh($arr) {
    if (count($arr) == 0) {
        return 0; // tránh chia cho 0
    }
    $tong = array_sum($arr);   // tính tổng các phần tử
    $soPhanTu = count($arr);   // đếm số phần tử
    return $tong / $soPhanTu;  // trả về trung bình cộng
}

// Ví dụ sử dụng
$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng của mảng là: " . tinhTrungBinh($mang);
?>
