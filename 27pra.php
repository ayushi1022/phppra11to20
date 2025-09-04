<?php
// Create array of numbers
$numbers = [45, 12, 78, 34, 89, 23, 56];

echo "<h3>Original Array:</h3>";
print_r($numbers);

// --- Ascending Order using sort() ---
sort($numbers);
echo "<h3>Array in Ascending Order (using sort()):</h3>";
print_r($numbers);

// --- Descending Order using rsort() ---
rsort($numbers);
echo "<h3>Array in Descending Order (using rsort()):</h3>";
print_r($numbers);
?>
