<?php
// Create an indexed array with duplicate values
$numbers = [10, 20, 30, 20, 40, 10, 50, 30];

echo "<h3>Original Array:</h3>";
print_r($numbers);

// Remove duplicate values using array_unique()
$uniqueNumbers = array_unique($numbers);

echo "<h3>Array after removing duplicates (using array_unique()):</h3>";
print_r($uniqueNumbers);
?>
