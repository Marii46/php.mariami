<?php
$cars = array(
    array(
        "Make" => "Toyota",
        "Model" => "Corolla",
        "Color" => "White",
        "Mileage" => 24000,
        "Status" => "Sold"
    ),
    array(
        "Make" => "Toyota",
        "Model" => "Camry",
        "Color" => "Black",
        "Mileage" => 56000,
        "Status" => "Available"
    ),
    array(
        "Make" => "Honda",
        "Model" => "Accord",
        "Color" => "White",
        "Mileage" => 15000,
        "Status" => "Sold"
    )
);

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
foreach ($cars[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

foreach ($cars as $car) {
    echo "<tr>";
    foreach ($car as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>