<div class="position-relative container">


    <div class="slider-cat ">
        <i class="bi bi-chevron-left d-xl-none d-block position-absolute fs-6 z-3 top-50"
            style="left: 10px;transform:translateY(-50%)" ;></i>
        <i class="bi bi-chevron-right d-xl-none d-block position-absolute fs-6 z-3 top-50"
            style="right: 20px;transform:translateY(-50%)" ;></i>
        <?php 
            include './config.php';
            $select = "SELECT * FROM categories";
            $result = mysqli_query($connection,$select);
            foreach($result as $row){
                echo "<div style='' class='card   flex-shrink-0 text-center border-0'>
                        <div class='rounded-circle p-4 my-3 mx-auto d-block  d-block s-image'
                            style='height: 150px;width:150px;background:#f3f3f3'>
                            <img class='rounded-circle'
                                src='./category_images/{$row['image']}'
                                width='122px' height='122px' alt=''>
                        </div>
                        <h5 class='text-capitalize'> {$row['name']} </h5>
                        <p class='text-secondary'>{$row['number']} products</p>
                    </div>";
            }
        ?>

    </div>
</div>