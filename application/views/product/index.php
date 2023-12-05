                <!-- Di dalam view Anda -->
<?php if ($this->session->flashdata('pesan')): ?>
    <div class="pesan-flash">
        <?php echo $this->session->flashdata('pesan'); ?>
    </div>
<?php endif; ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kelola Product</h1>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="<?php echo site_url('product/save'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Product Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['stock']; ?></td>
                <td>
                    <!-- Tambahkan tag img untuk menampilkan gambar -->
                    <img src="<?php echo base_url('assets/product/' . $product['image_url']); ?>" alt="Product Image" width="100" height="100">

                </td>
                <td>
                    <a href="<?php echo site_url('product/edit/' . $product['id']); ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?php echo site_url('product/delete/' . $product['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        </div>
    </div>
                        
