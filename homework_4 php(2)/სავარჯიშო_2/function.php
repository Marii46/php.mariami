<?php
$M = $_POST['M'];
$N = $_POST['N'];
$a = $_POST['a'];
$b = $_POST['b'];
echo "<h1>ცხრილი</h1>";
echo "<table border='1'>";

for($i=0; $i<$M; $i++){
    echo "<tr>";

    for($j=0; $j<$N; $j++){
        echo "<td>".rand($a,$b)."</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>