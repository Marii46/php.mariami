<?php
for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        $m[$i][$j] = rand(10,100);
    }
}

echo "<h2>მატრიცა</h2>";
echo "<table border='1'>";

for($i=0;$i<4;$i++){
    echo "<tr>";
    for($j=0;$j<4;$j++){
        echo "<td>".$m[$i][$j]."</td>";
    }
    echo "</tr>";
}

echo "</table><br>";

$x = $_POST['x'];

echo "<h3>X-ის ჯერადი რიცხვები</h3>";

for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){

        if($m[$i][$j] % $x == 0){
            echo $m[$i][$j]." ";
        }

    }
}

echo "<br><br>";

$sum = 0;
$prod = 1;
$min = $m[0][0];
$max = $m[0][0];

for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){

        $sum += $m[$i][$j];
        $prod *= $m[$i][$j];

        if($m[$i][$j] < $min) $min = $m[$i][$j];
        if($m[$i][$j] > $max) $max = $m[$i][$j];

    }
}

$avg = $sum / 16;
$range = $max - $min;

echo "ჯამი: $sum <br>";
echo "ნამრავლი: $prod <br>";
echo "საშუალო: $avg <br>";
echo "განი: $range <br><br>";

echo "<h3>ციფრთა ჯამი</h3>";
echo "<table border='1'>";

for($i=0;$i<4;$i++){

    echo "<tr>";

    for($j=0;$j<4;$j++){

        $num = $m[$i][$j];
        $digitSum = 0;

        while($num > 0){
            $digitSum += $num % 10;
            $num = floor($num / 10);
        }

        echo "<td>$digitSum</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>