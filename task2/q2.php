<?php
function calculateBoxSize($height) {
    $length = 5;
    $width = 2;
    $size = $length * $width * $height;
    return $size;
}

$boxHeight = 4; 

$boxSize = calculateBoxSize($boxHeight);

echo "Box size: $boxSize";
?>