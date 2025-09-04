<?php
// Associative array of fruits and their prices
$fruits = [
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
];

echo "<h3>Original Array:</h3>";
print_r($fruits);

// Sort by values (prices) using asort()
$byValue = $fruits;
asort($byValue);
echo "<h3>Sorted by Values (Prices) using asort():</h3>";
foreach($byValue as $fruit => $price) {
    echo "$fruit : Rs.$price <br>";
}

// Sort by keys (fruit names) using ksort()
$byKey = $fruits;
ksort($byKey);
echo "<h3>Sorted by Keys (Fruit Names) using ksort():</h3>";
foreach($byKey as $fruit => $price) {
    echo "$fruit : Rs.$price <br>";
}
?>
