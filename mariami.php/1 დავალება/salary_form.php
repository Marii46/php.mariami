<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>სახელფასო უწყისი</h2>
    <form action="salary_worker.php" method="get">
        <label for="">სახელი:</label><br>
        <input type="text" name="saxeli"><br><br>

        <label for="">გვარი:</label><br>
        <input type="text" name="gvari"><br><br>

        <label for="">დაკავებული თანამდებობა</label><br>
        <input type="text" name="tanamdeboba"><br><br>

        <label for="">ხელფასის რაოდენობა:</label><br>
        <input type="number" name="xelfasi"><br><br>

        <label for="საშემოსავლო გადასახადი:"></label><br>
        <input type="radio" name="" id="gadasaxadi" value="20" checked>20% ფიქსირებული <br>
        <input type="radio" name="" id="gadasaxadi" value="custom" checked>საკუთარი პროცენტი <br><br>

        <label for="">თუ აირჩევ პროცენტს ჩაწერე აქ:</label><br>
        <input type="number" name="custom_procent"><br><br>

        <button type="submit">გამოთვლა</button>



    </form>
</body>
</html>