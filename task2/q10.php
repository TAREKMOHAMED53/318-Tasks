<?php
$sentence = "EraaSoft Learn by practice";
$wordToFind = "EraaSoft";

$position = strpos($sentence, $wordToFind);

if ($position !== false) {
    echo "The extracted word is: " . $wordToFind;
} else {
    echo "Word not found.";
}

?>