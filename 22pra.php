<?php
// Creating indexed array of size 10
$arr = [10,20,30,40,50,60,70,80,90,100];

// Printing the array elements using foreach loop
echo "<h3>Indexed Array (using foreach loop):</h3>";
foreach($arr as $index => $value) {
    echo "Element at index [$index] = $value <br>";
}
?>
