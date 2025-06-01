<?php 
    include '../config.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $current_page = $_SERVER['HTTP_REFERER'];
    move_uploaded_file($tmp_name,'../product_images/' . $filename);


    $insert = "INSERT INTO products (name,category,price,description,stock,image) VALUES ('$name','$category',$price,'$description',$stock,'$filename')";

    mysqli_query($connection,$insert);


    header("Location: $current_page");

?>