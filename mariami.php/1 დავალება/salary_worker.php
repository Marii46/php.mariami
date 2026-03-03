<?php
echo "<h1>salary result</h1>";
if(isset($_GET['saxeli'])){
    echo "<pre>";
    print_r($_GET);
    echo"</pre>";
}
$saxeli=$_GET['saxeli'];
$gvari=$_GET['gvari'];
$tanamdeboba=$_GET['tanamdeboba'];
$xelfasi=$_GET['xelfasi'];

if($_GET['gadasaxadi']=="custom"){
    $percent=$_GET['custom_percent'];
}else{
    $percent = $_GET['gadasaxadi'];
}
$gadasaxadis_tanxa=$xelfasi*$percent/100;
$daricxuli=$xelfasi-$gadasaxadis_tanxa;

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th>სახელი</th>
<th>გვარი</th>
<th>თანამდებობა</th>
<th>ხელფასი</th>
<th>გადასახადი  (%)</th>
<th>გადასახადის თანხა</th>
<th>ხელზე ასაღები</th>
</tr>";

echo "<tr>
<td>$saxeli</td>
<td>$gvari</td>
<td>$tanamdeboba</td>
<td>$xelfasi</td>
<td>$percent%</td>
<td>$gadasaxadis_tanxa</td>
<td>$daricxuli</td>
</tr>";


echo "</table>";
?>

