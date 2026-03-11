<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            
            width: 600px;
            margin: auto;
            padding: 10px;
            border: 1px solid black;
        }
        .result{
            width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            background-color: pink;
        }
        
    </style>
</head>
<body>
    <form action="" method="POST">
        <a href="Validation.php">HOME</a>
        <h1>PHP Form Validation Example</h1>
        <p  style="color: red;"> * required field</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder=" "><br><br>
        <label for="text">Email: </label>
        <input type="text" name="email"  placeholder=" " ><br><br>
        <label for="text">Website: </label>
        <input type="text" name="website"  placeholder=""><br><br>
        <label for="text">Comment: </label>
        <textarea name="comment"  cols="25" rows="7"></textarea><br><br>
        <label for="text">Gender: </label>
        <input type="radio" name="gender" value="female">Female     
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br><br>
        <<button type="submit" name="submit-form">Submit</button>
        <h1>Your Input:</h1>
        
    </form>
    <div class="result">
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            if(isset($_POST['submit-form'])){
                echo "<h3>Clicked</h3>";
                if(empty($_POST['name'])){
                    echo "<p>Name is Empty!!!!</p>";
                }

                if(empty($_POST['email'])){
                    echo "<p>Email is Empty!!!!</p>";
                }

                

            }
        ?>
    </div>


</body>
</html>