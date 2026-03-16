<!DOCTYPE html>
<html lang="ka">
<head>
<meta charset="UTF-8">
<title>დამცავი კოდი</title>
</head>
<body>

<h2>დამცავი კოდი: 12345</h2> 

<form action="code.php" method="post">
    <input type="hidden" name="realcode" value="12345">
    <label>ჩაწერეთ კოდი:</label>
    <input type="number" name="usercode" required>
    <br><br>
    <button>გაგზავნა</button>
</form>

</body>
</html>