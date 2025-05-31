<?php 
    $hostname = 'localhost';
    $username = "root";
    $password = "";
    $database = "woodmart";

    $base_url = 'http://localhost:3000';

    $connection = mysqli_connect($hostname,$username,$password,$database) or die();


?>