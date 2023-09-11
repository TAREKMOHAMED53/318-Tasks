<?php
$firstArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$secondArray = [];

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $index = $i * 5 + $j;
        if ($index < count($firstArray)) {
            $secondArray[$i][$j] = $firstArray[$index];
        } else {
            $secondArray[$i][$j] = 0; 
        }
    }
}


echo "First Array: [" . implode(", ", $firstArray) . "]";
echo"<br>";
echo "Second 2D Array:";
foreach ($secondArray as $row) {
    echo "[" . implode(", ", $row) . "]";
}
?>
