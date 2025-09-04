<?php
// Create an array
$numbers = [10, 20, 30, 40, 50];

// Value to search
$search = 30;

// Check using in_array()
if(in_array($search, $numbers)) {
    echo "<h3>Yes, the value $search exists in the array.</h3>";
} else {
    echo "<h3>No, the value $search does not exist in the array.</h3>";
}
?>
