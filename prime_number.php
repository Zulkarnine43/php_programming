<?php 
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    
    return true;
}

$number = 17;
$result = isPrime($number);
echo $result ? "$number is prime." : "$number is not prime."; // Outputs: "17 is prime."
?>