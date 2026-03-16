<?php
if (!empty($_POST['number'])) {
    $num = abs((int)$_POST['number']); 
    echo "რიცხვი {$_POST['number']} არის " . strlen((string)$num) . "-ნიშნაა.";
} else {
    echo "რიცხვი ვერ მოიძებნა.";
}
?>