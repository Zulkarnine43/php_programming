<?php 
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$position = 6;
$result = fibonacci($position);
echo "Fibonacci at position $position: " . $result; // Outputs: "Fibonacci at position 6: 8"
?>