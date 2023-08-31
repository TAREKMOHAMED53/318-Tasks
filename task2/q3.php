<?php
function hoursToSeconds($hours) {
    $seconds = $hours * 3600; 
    return $seconds;
}

$hours = 2; 

$seconds = hoursToSeconds($hours);

echo "$hours hours is equal to $seconds seconds.";
?>