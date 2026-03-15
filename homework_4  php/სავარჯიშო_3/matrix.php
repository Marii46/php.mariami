<?php
$rows = 6;
$cols = 5;
echo "<h2>6x5 მატრიცა </h2>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        $value = $i + $j;
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>