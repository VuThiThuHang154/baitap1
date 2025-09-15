<?php
function giaiPTB2($a, $b, $c) {
    if ($a == 0) {
        // Trường hợp trở thành PT bậc 1: bx + c = 0
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            $x = -$c / $b;
            return "Phương trình bậc nhất có nghiệm: x = $x";
        }
    }

    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}

// Ví dụ:
echo giaiPTB2(1, -3, 2);  // Kết quả: x1 = 2, x2 = 1
?>
