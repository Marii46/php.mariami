<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1.sql");

$select_roles_query = "SELECT * FROM roles";
$roles_result = mysqli_query($connect, $select_roles_query);
$data_of_roles_result = mysqli_fetch_all($roles_result);
?>

<style>
table{
    border: solid 1px black;
    border-collapse: collapse;
}
table td, th {
    border: solid 1px black;
    padding: 8px;
}
form{
    width: 300px;
    border: solid 1px black;
    margin: auto;
    padding: 10px;
}
</style>

<?php 
if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    if(isset($_POST['role'])){
        $role = mysqli_real_escape_string($connect, $_POST['role']);
        $update_role = "UPDATE roles SET role='$role' WHERE id=$id";
        mysqli_query($connect, $update_role);
        header("Location: db_test_2.php");
        exit;
    }

    $select_role_by_id_query = "SELECT * FROM roles WHERE id=$id";
    $result_role_by_id = mysqli_query($connect, $select_role_by_id_query);
    $row_role_by_id = mysqli_fetch_array($result_role_by_id);
?>

<form method="post">
    <h3>update form</h3>
    Role: <input type="text" name="role" value="<?= $row_role_by_id['role'] ?>">
    <br><br>
    <button>edit Role</button>
</form>

<?php } ?>

<hr><hr>
<div> 
    <a href="db_test_2.php">home</a>
</div>
<hr><hr>

<table>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th>Deleted_at</th>
    <th>edit</th>
    <th>drop</th>
</tr>

<?php foreach($data_of_roles_result as $row){ ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
    <td><?= $row[3] ?></td>
    <td><?= $row[4] ?></td>
    <td><a href="?id=<?= $row[0] ?>">edit</a></td>
    <td><button>drop</button></td>
</tr>
<?php } ?>

</table>