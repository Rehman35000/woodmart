<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-list me-2"></i> Categories</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#category-modal">Add Category</button>
    </div>
    <div class="card-body z-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../config.php';
                    $select = "SELECT * FROM categories";
                    $result = mysqli_query($connection,$select);
                    foreach($result as $item){
                        echo "
                            <tr>
                                <td> {$item['id']} </td>
                                <td> {$item['name']} </td>
                                <td> {$item['number']} </td>
                                <td>
                                    <img width='50px' height='50px' class='border object-fit-contain' src='../category_images/{$item['image']}' >
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

<!-- Category Modal -->
<div class="modal fade z-3" id="category-modal" tabindex="-1" aria-labelledby="category-modal-label" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="category-modal-label"><i class="fas fa-plus me-2"></i> Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./add-category.php" enctype="multipart/form-data" method="POST" id="category-form">
                    <div class="mb-3">
                        <label for="category-name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category-name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category-description" class="form-label">Number</label>
                        <input class="form-control" id="category-description" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="category-icon" class="form-label">Image</label>
                        <input type="file" class="form-control" id="category-icon" name="image"
                            placeholder="e.g., fas fa-mobile-alt">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>