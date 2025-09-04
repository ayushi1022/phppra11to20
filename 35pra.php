<?php
// Associative array of countries and capitals
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Germany" => "Berlin"
];

// Value (capital city) to search
$searchCapital = "Tokyo";

// Search using array_search()
$result = array_search($searchCapital, $countries);

if($result !== false) {
    echo "<h3>The capital '$searchCapital' belongs to country: $result</h3>";
} else {
    echo "<h3>The capital '$searchCapital' was not found in the array.</h3>";
}
?>
