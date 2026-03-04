<?php
    include "questions.php";

    echo "<pre>";
    print_r($questions);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="lecturer.php" method="post">
        <table class="questions-tb">
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th>Max Point</th>
            </tr>
            <tr>
                <td>What is JS?</td>
                <td><input type="text" name="answer"></td>
                <td>8</td>
            </tr>
            <tr>
                <td colspan="3">
                    Student: 
                    <input type="text" placeholder="name" name="firstname"> 
                    <input type="text" placeholder="lastname" name="lastname"> 
                    <button>Send</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
