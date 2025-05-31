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
                <tr>
                    <td>1</td>
                    <td>Quantum Smartphone</td>
                    <td>Electronics</td>
                    <td>$699</td>
                    <td>150</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Smart Jacket</td>
                    <td>Clothing</td>
                    <td>$129</td>
                    <td>200</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LED Lamp</td>
                    <td>Home & Garden</td>
                    <td>$49</td>
                    <td>300</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
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
                <form id="product-form">
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product-name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="product-category" class="form-label">Category</label>
                        <select class="form-control" id="product-category" name="category" required>
                            <option value="Electronics">Electronics</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Home & Garden">Home & Garden</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="product-price" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="product-price" name="price" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="product-stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="product-stock" name="stock" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </form>
            </div>
        </div>
    </div>
</div>