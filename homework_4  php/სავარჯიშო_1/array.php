<?php
$arr=[];
for ($i=0;$i<12;$i++){
    $arr[$i]=rand(10,100);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$x = $_POST['x'];

$less = 0;
$more = 0;

for($i=0; $i<count($arr); $i++){

    if($arr[$i] < $x){
        $less++;
    }

    if($arr[$i] > $x){
        $more++;
    }

}

echo "X = ".$x."<br>";
echo "X-ზე ნაკლები ელემენტები: ".$less."<br>";
echo "X-ზე მეტი ელემენტები: ".$more;
?>