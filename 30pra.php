<?php
// Create an associative array
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
];

// Print using foreach loop
echo "<h3>Countries and their Capitals:</h3>";
foreach($countries as $country => $capital) {
    echo "The capital of <b>$country</b> is <b>$capital</b><br>";
}
?>
