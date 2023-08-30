<?php 
function arraySum($arr) {
    return array_sum($arr);
}

$array = [1, 2, 3, 4, 5];
$sum = arraySum($array);
echo "Sum of array elements: " . $sum; // Outputs: "Sum of array elements: 15"
?>