<?php
// Existing associative array
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
];

// Add new key-value pair
$countries["Germany"] = "Berlin";

// Print updated array
echo "<h3>Updated Countries and their Capitals:</h3>";
foreach($countries as $country => $capital) {
    echo "The capital of <b>$country</b> is <b>$capital</b><br>";
}
?>
