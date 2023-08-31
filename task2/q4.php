<?php
function calculateTriangleArea($base, $height) {
    $area = 0.5 * $base * $height;
    return $area;
}

$triangleBase = 5;  
$triangleHeight = 10;  

$area = calculateTriangleArea($triangleBase, $triangleHeight);

echo "The area of the triangle is: $area";
?>
