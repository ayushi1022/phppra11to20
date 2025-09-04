<?php
// Indexed array
$numbers = [45, 12, 78, 34, 89, 23, 56];

// Method 1: Using built-in functions
$largest = max($numbers);
$smallest = min($numbers);

echo "<h3>Using built-in functions:</h3>";
echo "Largest Number = $largest <br>";
echo "Smallest Number = $smallest <br>";

// Method 2: Using foreach loop
$largest = $numbers[0];
$smallest = $numbers[0];

foreach($numbers as $num) {
    if($num > $largest) {
        $largest = $num;
    }
    if($num < $smallest) {
        $smallest = $num;
    }
}

echo "<h3>Using foreach loop:</h3>";
echo "Largest Number = $largest <br>";
echo "Smallest Number = $smallest <br>";
?>
