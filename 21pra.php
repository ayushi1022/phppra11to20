<?php
// Creating indexed array of size 10 using for loop
for($i = 0; $i < 10; $i++) {
    $arr[$i] = ($i + 1) * 10;  // values: 10,20,30...100
}

// Printing the array elements
echo "<h3>Indexed Array (using for loop):</h3>";
for($i = 0; $i < 10; $i++) {
    echo "Element at index [$i] = " . $arr[$i] . "<br>";
}
?>
