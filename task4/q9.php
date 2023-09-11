<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function checkNumber($numbers, $x) {
    if (in_array($x, $numbers)) {
        echo "Found, ";
        echo $x >= 0 ? "Positive, " : "Negative, ";
        echo "Number of digits: " . strlen(abs($x)) . ", ";
        echo isPrime(abs($x)) ? "Prime, " : "Not prime, ";
        echo $x % 2 == 0 ? "Even, " : "Odd, ";
        $isPalindrome = strrev($x) == $x ? "Yes" : "No";
        echo $isPalindrome . " -> read from the right as the left";
    } else {
        echo "Not found";
    }
}

$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x1 = 545;
$x2 = 1000;

echo "For $x1: ";
checkNumber($numbers, $x1);
echo "<br>";

echo "For $x2: ";
checkNumber($numbers, $x2);
echo "<br>";
?>
