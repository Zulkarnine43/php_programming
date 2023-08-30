<?php 
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str)); // Remove non-alphanumeric characters and convert to lowercase
    return $str === strrev($str);
}

$input = "A man, a plan, a canal, Panama!";
$result = isPalindrome($input);
echo $result ? "Palindrome" : "Not a Palindrome"; // Outputs: "Palindrome"
?>