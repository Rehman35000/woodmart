<?php 
    include '../config.php';
    $id = $_GET['id'];
    $current_page = $_SERVER['HTTP_REFERER'];
    $delete = "DELETE FROM categories WHERE id = $id";
    mysqli_query($connection,$delete);
    header("Location: $current_page");
?>