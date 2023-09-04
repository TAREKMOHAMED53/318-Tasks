<?php
function addition($num1, $num2) {
    return $num1 + $num2;
}

function subtraction($num1, $num2) {
    return $num1 - $num2;
}

function multiplication($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Division by zero is not allowed.";
    }
}

function power($num1, $num2) {
    return pow($num1, $num2);
}

function modulus($num1, $num2) {
    if ($num2 != 0) {
        return $num1 % $num2;
    } else {
        return "Error: Modulus by zero is not allowed.";
    }
}

function calculate($operation, $num1, $num2) {
    if ($operation == "addition") {
        return addition($num1, $num2);
    } elseif ($operation == "subtraction") {
        return subtraction($num1, $num2);
    } elseif ($operation == "multiplication") {
        return multiplication($num1, $num2);
    } elseif ($operation == "division") {
        return division($num1, $num2);
    } elseif ($operation == "power") {
        return power($num1, $num2);
    } elseif ($operation == "modulus") {
        return modulus($num1, $num2);
    } else {
        return "Error: Invalid operation.";
    }
}

$operation = "addition";
$num1 = 5;
$num2 = 3;

$result = calculate($operation, $num1, $num2);
echo "The result of $operation is: $result";

?>