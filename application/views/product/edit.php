<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kelola Product</h1>
        
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('product'); ?>">Product</a></li>
            <li class="breadcrumb-item active">Edit Product</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('product/update/' . $product['id']); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <textarea class="form-control" id="description" name="description" required><?php echo $product['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Product Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $product['stock']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                    </div>
                    <input type="hidden" name="old_image" value="<?php echo $product['image_url']; ?>">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
