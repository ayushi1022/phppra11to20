<?php
$name = "XYZ";
$marks = [40, 30, 45, 48, 34];
$max = [50, 50, 50, 50, 50];

$total = array_sum($marks);
$max_total = array_sum($max);
$percentage = ($total/$max_total)*100;

echo "<h3>Name: $name</h3>";
echo "<table border='1' cellpadding='5'>
<tr><th>Subject</th><th>Max Marks</th><th>Obtained Marks</th></tr>";

for($i=0; $i<5; $i++){
    echo "<tr><td>Sub".($i+1)."</td><td>$max[$i]</td><td>$marks[$i]</td></tr>";
}

echo "<tr><td>Total</td><td>$max_total</td><td>$total</td></tr>";
echo "</table>";

echo "Percentage = $percentage %<br>";
echo ($percentage >= 75) ? "Result: Passed with Distinction" : "Result: Passed/Failed";
?>
