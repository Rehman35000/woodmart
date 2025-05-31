<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i> Content Management</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cms-modal">Add Content</button>
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Home Page Banner</td>
                    <td>Banner</td>
                    <td>Published</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>About Us Page</td>
                    <td>Page</td>
                    <td>Draft</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Footer Text</td>
                    <td>Snippet</td>
                    <td>Published</td>
                    <td>
                        <button class="btn btn-sm btn-warning me-2"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- CMS Modal -->
<div class="modal fade" id="cms-modal" tabindex="-1" aria-labelledby="cms-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cms-modal-label"><i class="fas fa-plus me-2"></i> Add New Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="cms-form">
                    <div class="mb-3">
                        <label for="cms-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="cms-title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="cms-type" class="form-label">Type</label>
                        <select class="form-control" id="cms-type" name="type" required>
                            <option value="Banner">Banner</option>
                            <option value="Page">Page</option>
                            <option value="Snippet">Snippet</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cms-content" class="form-label">Content</label>
                        <textarea class="form-control" id="cms-content" name="content" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cms-status" class="form-label">Status</label>
                        <select class="form-control" id="cms-status" name="status" required>
                            <option value="Draft">Draft</option>
                            <option value="Published">Published</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </form>
            </div>
        </div>
    </div>
</div>