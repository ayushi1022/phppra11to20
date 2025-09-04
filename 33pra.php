<?php
// Associative array of students and marks
$students = [
    "Ravi" => 85,
    "Priya" => 92,
    "Amit" => 76,
    "Sneha" => 89,
    "Karan" => 95
];

// Key to search
$searchKey = "Amit";

// Check if key exists
if(array_key_exists($searchKey, $students)) {
    echo "<h3>Yes, the key '$searchKey' exists in the array.</h3>";
    echo "$searchKey has marks: " . $students[$searchKey];
} else {
    echo "<h3>No, the key '$searchKey' does not exist in the array.</h3>";
}
?>
