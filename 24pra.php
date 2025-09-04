<?php
// Storing numbers in an indexed array
$numbers = [10, 20, 30, 40, 50];

// Method 1: Using array_sum() function
$sum1 = array_sum($numbers);
echo "<h3>Sum using array_sum() = $sum1</h3>";

// Method 2: Using foreach loop
$sum2 = 0;
foreach($numbers as $value){
    $sum2 += $value;
}
echo "<h3>Sum using foreach loop = $sum2</h3>";
?>
