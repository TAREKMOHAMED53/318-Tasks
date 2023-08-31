<?php
function calculateTotal($digit1, $digit2, $digit3) {
    return ($digit1 + $digit2) * $digit3;
}

$digit1 = 2; 
$digit2 = 3; 
$digit3 = 5; 

$total = calculateTotal($digit1, $digit2, $digit3);

echo "Total: $total";

?>