<?php
function findBobLocation($names) {
    foreach ($names as $key => $name) {
        if ($name === "Bob") {
            return $key; 
        }
    }
    return -1; 
}

$names1 = ["Alice", "Bob", "Charlie", "Dave"];
$names2 = ["Alice", "Charlie", "Dave"];

$location1 = findBobLocation($names1);
echo $location1 ; 
echo"<br>";
$location2 = findBobLocation($names2);
echo $location2 ; 
?>
