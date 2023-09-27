<?php
function removeEvenNumbers($numbers) {

    $filteredNumbers = array_filter($numbers, function ($value) {
        return $value % 2 != 0; 
    });

    $filteredNumbers = array_values($filteredNumbers);

    print_r($filteredNumbers);
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

removeEvenNumbers($numbers);
?>
