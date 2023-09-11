<?php
function calculateAverage($array) {
    $sum = array_sum($array);
    $count = count($array);
    
    if ($count > 0) {
        return $sum / $count;
    } else {
        return 0; 
    }
}

$n = 5; 

$numbers = [];
for ($i = 0; $i < $n; $i++) {
    $numbers[] = rand(1, 100); 
}

$average = calculateAverage($numbers);

echo "Array: [" . implode(", ", $numbers) . "]";
echo"<br>";
echo "Average: $average";
?>
