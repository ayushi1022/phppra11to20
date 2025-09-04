<?php
// Original array
$arr = [50, 10, 40, 20, 30];
echo "<h3>Original Array:</h3>";
print_r($arr);
echo "<br><br>";

// 1. sort() → Ascending order (values)
$sortArr = $arr;
sort($sortArr);
echo "<b>sort() - Ascending by values:</b><br>";
print_r($sortArr);
echo "<br><br>";

// 2. rsort() → Descending order (values)
$rsortArr = $arr;
rsort($rsortArr);
echo "<b>rsort() - Descending by values:</b><br>";
print_r($rsortArr);
echo "<br><br>";

// Associative array for key-based sorting
$assoc = ["b" => 200, "a" => 100, "d" => 400, "c" => 300];
echo "<h3>Original Associative Array:</h3>";
print_r($assoc);
echo "<br><br>";

// 3. asort() → Ascending order (by values, keep keys)
$asortArr = $assoc;
asort($asortArr);
echo "<b>asort() - Ascending by values (keep keys):</b><br>";
print_r($asortArr);
echo "<br><br>";

// 4. arsort() → Descending order (by values, keep keys)
$arsortArr = $assoc;
arsort($arsortArr);
echo "<b>arsort() - Descending by values (keep keys):</b><br>";
print_r($arsortArr);
echo "<br><br>";

// 5. ksort() → Ascending order by keys
$ksortArr = $assoc;
ksort($ksortArr);
echo "<b>ksort() - Ascending by keys:</b><br>";
print_r($ksortArr);
echo "<br><br>";

// 6. krsort() → Descending order by keys
$krsortArr = $assoc;
krsort($krsortArr);
echo "<b>krsort() - Descending by keys:</b><br>";
print_r($krsortArr);
?>
