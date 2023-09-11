<?php
function capitalizeFirstLetter($names) {
    $capitalizedNames = [];
    
    foreach ($names as $name) {
        $capitalizedNames[] = ucfirst($name);
    }
    
    return $capitalizedNames;
}

$array_of_names = ["eraasoft", "backend", "group313"];

$capitalized_names = capitalizeFirstLetter($array_of_names);

echo json_encode($capitalized_names);
?>
