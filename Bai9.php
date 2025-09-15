<?php
function veHCN($dong, $cot) {
    echo "<pre>"; // giữ nguyên khoảng trắng và xuống dòng
    for ($i = 1; $i <= $dong; $i++) {
        for ($j = 1; $j <= $cot; $j++) {
            if ($i == 1 || $i == $dong || $j == 1 || $j == $cot) {
                echo "* ";
            } else {
                echo "  "; // khoảng trống bên trong
            }
        }
        echo "\n"; // xuống dòng
    }
    echo "</pre>";
}

// Gọi hàm vẽ hình chữ nhật rỗng 5x7
veHCN(5, 7);
?>
