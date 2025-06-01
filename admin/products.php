<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-box me-2"></i> Products</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#product-modal">Add Product</button>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../config.php';
                    $select = "SELECT * FROM products";
                    $result = mysqli_query($connection,$select);
                    foreach($result as $row){
                        echo "
                            <tr>
                                <td> {$row['id']} </td>
                                <td>{$row['name']}</td>
                                <td>{$row['category']}</td>
                                <td>{$row['price']}</td>
                                <td>$ {$row['stock']}</td>
                                <td>
                                    <img src='../product_images/{$row['image']}' class='border object-fit-contain' width='60px' height='60px' >
                                </td>
                                <td>
                                    <button class='btn btn-sm btn-warning me-2'><i class='fas fa-edit'></i> Edit</button>
                                    <button class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Delete</button>
                                </td>
                            </tr>
                        ";
                    }
                ?>

            </tbody>
        </table>
    </div>
</div>

<!-- Product Modal -->
<div class="modal fade" id="product-modal" tabindex="-1" aria-labelledby="product-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="product-modal-label"><i class="fas fa-plus me-2"></i> Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="./add-product.php" enctype="multipart/form-data" id="product-form">
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product-name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="product-category" class="form-label">Category</label>
                        <select class="form-control text-capitalize" id="product-category" name="category" required>
                            <?php 
                                include '../config.php';
                                $select = "SELECT * FROM categories";
                                $result = mysqli_query($connection,$select);
                                foreach($result as $item){

                                    echo "<option class='text-capitalize' value='{$item['name']}'>{$item['name']}</option>";
                                }
                                ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="product-price" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="product-price" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="product-desc" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="product-desc" name="description" step="0.01"
                            rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="product-stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="product-stock" name="stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="product-image" class="form-label">Stock</label>
                        <input type="file" class="form-control" id="product-image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </form>
            </div>
        </div>
    </div>
</div>