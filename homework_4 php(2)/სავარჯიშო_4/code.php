<?php
session_start(); 

if (isset($_POST['user_answer'])) {
    $user = intval($_POST['user_answer']);
    if ($user == $_SESSION['answer']) {
        echo "სწორია!";
    } else {
        echo "არასწორია";
    }
}
?>