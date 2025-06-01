<div class="container mx-auto my-5 py-xl-5 py-3 row">
    <?php 
    include './config.php';
    $select = "SELECT * FROM products";
    $result = mysqli_query($connection,$select);
    foreach($result as $row){
        echo "
             <div class='col-xl-3 my-2'>
                <div class='card border-0 text-center p-3'>

                    <img class='object-fit-contain' src='./product_images/{$row['image']}' height='300px' width='100%' alt=''>
                    <h6>{$row['name']}</h6>
                    <p class='text-secondary'>
                        {$row['category']}
                    </p>
                    <h6 class='text-primary'>
                      $ {$row['price']}
                    </h6>

                </div>
            </div>
        ";
    }
    ?>

</div>