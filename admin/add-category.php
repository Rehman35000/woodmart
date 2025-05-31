<?php 
    include '../config.php';
    $name = $_POST['name'];
    $number = $_POST['number'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];


    move_uploaded_file($tmp_name,'../category_images/' . $filename);

    // send to backend

    $add = "INSERT INTO categories (name,number,image) VALUES ('$name',$number,'$filename')";
    mysqli_query($connection,$add);

    header("Location: $base_url/admin/index.php?page=categories")

    
    
?>