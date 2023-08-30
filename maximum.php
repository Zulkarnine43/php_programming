<?php 
function findMaxValue($arr) {
    return max($arr);
}

$array = [5, 2, 9, 1, 7];
$maxValue = findMaxValue($array);
echo "Maximum value: " . $maxValue; // Outputs: "Maximum value: 9"
?>