<?php
// Create associative array of students and their marks
$students = [
    "Ravi" => 85,
    "Priya" => 92,
    "Amit" => 76,
    "Sneha" => 89,
    "Karan" => 95
];

echo "<h3>Original Student Marks:</h3>";
print_r($students);

// Update marks of one student (e.g., Amit)
$students["Amit"] = 88;

echo "<h3>Updated Student Marks:</h3>";
foreach($students as $name => $marks) {
    echo "$name : $marks <br>";
}
?>
