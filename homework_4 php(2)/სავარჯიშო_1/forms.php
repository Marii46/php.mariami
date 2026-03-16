<?php
echo "<h1>ცხრილი</h1>";
echo "<table border='1'>";

for($i=0; $i<10; $i++){
    echo "<tr>";
    
    for($j=0; $j<10; $j++){
        echo "<td>".rand(10,99)."</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>