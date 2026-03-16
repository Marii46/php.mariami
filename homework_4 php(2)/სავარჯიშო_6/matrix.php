<?php
if (!empty($_POST['M']) && !empty($_POST['N']) && isset($_POST['a'], $_POST['b'])) {
    $M = (int)$_POST['M'];
    $N = (int)$_POST['N'];
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    $colSum = array_fill(0, $N, 0);

    echo "<table border='1' cellpadding='5'>";
    for ($i = 0; $i < $M; $i++) {
        $rowSum = 0;
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            $val = rand($a, $b);
            echo "<td>$val</td>";
            $rowSum += $val;
            $colSum[$j] += $val;
        }
        echo "<td><b>$rowSum</b></td>";
        echo "</tr>";
    }

    echo "<tr><td><b>სვეტის ჯამი</b></td>";
    foreach ($colSum as $sum) echo "<td><b>$sum</b></td>";
    echo "<td></td></tr></table>";
} else {
    echo "არასწორი მონაცემები.";
}
?>