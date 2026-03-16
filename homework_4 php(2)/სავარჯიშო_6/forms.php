<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MxN მატრიცა</title>
</head>
<body>
    <h2>შეიყვანეთ მატრიცის პარამეტრები</h2>
    <form action="matrix.php" method="post">
        <label>სტრიქონების რაოდენობა (M):</label>
        <input type="number" name="M" required><br><br>

        <label>სვეტების რაოდენობა (N):</label>
        <input type="number" name="N" required><br><br>

        <label>ქვედა ზღვარი (a):</label>
        <input type="number" name="a" required><br><br>

        <label>ზედა ზღვარი (b):</label>
        <input type="number" name="b" required><br><br>

        <button type="submit">მატრიცის შექმნა</button>
    </form>
</body>
</html>