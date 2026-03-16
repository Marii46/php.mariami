<?php
session_start();

$num1 = rand(10, 99);
$num2 = rand(10, 99);
$operator = ['+', '-'][array_rand(['+', '-'])];

$_SESSION['answer'] = $operator == '+' ? $num1 + $num2 : $num1 - $num2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="code.php" method="post">
    <label>რამდენია <?php echo "$num1 $operator $num2"; ?> ?</label>
    <input type="number" name="user_answer" required>
    <button type="submit">შემოწმება</button>
</form>
</body>
</html>