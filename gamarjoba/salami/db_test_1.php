<?php
$connect = mysqli_connect("localhost", "root", "", "blog_1");
// echo "<pre>";
// print_r($connect);
// echo "</pre>";
$select_roles_query = "SELECT * FROM `roles`";
$query= mysqli_query($connect, $select_roles_query);
// echo "<pre>";
// print_r($query);
// echo "</pre>";


$data_of_roles = mysqli_fetch_all($query);
// echo "<pre>";
if(isset($_POST['name'])){
    $_role = $_POST['name'];
    $insert_roles_query = "INSERT INTO `roles`(`role`) VALUES ('$._role')";
    mysqli_query($connect, $insert_roles_query);
    header("Location: db_test_1.php");
}

?>

<style>
    table{
  border: 1px solid black;
  border-collapse: collapse;
  
}
table,td,th{
  border: 1px solid black;
  padding: 8px;
}
from{
    width:  300px;
    border: solid 1px black;
    margin: auto;
    padding: 10px;
}
</style>
<table>
    <form method="post">
    Role: <input type="text" name="name">
    <br><br>
    <button type="submit">insert into role</button>
</form>
    <tr>
       <th>id</th>
       <th>name</th>
       <th>created_at</th>
       <th>update_at</th>
       <th>deleted_at</th>

    </tr>
    <?php 
    foreach($data_of_roles as $row){ 
        ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
        <td><?= $row[3] ?></td>
        <td><?= $row[4] ?></td>
    </tr>
    <?php } ?>
    
        
</table>


