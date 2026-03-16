<?php
$user = $_POST['usercode'];
$real = $_POST['realcode'];

if($user == $real){
    echo "კოდი სწორია!";
}else{
    echo "კოდი არასწორია!";
}
?>