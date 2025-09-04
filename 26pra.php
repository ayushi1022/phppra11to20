<?php
// Create array of 6 elements
$arr = [10, 20, 30, 40, 50, 60];

echo "<h3>Original Array:</h3>";
print_r($arr);

// --- Method 1: Reverse manually using for loop ---
echo "<h3>Reverse Order (without array_reverse):</h3>";
for($i = count($arr) - 1; $i >= 0; $i--) {
    echo $arr[$i] . " ";
}

// --- Method 2: Reverse using array_reverse() ---
echo "<h3>Reverse Order (using array_reverse):</h3>";
$revArr = array_reverse($arr);
print_r($revArr);
?>
