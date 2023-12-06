<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kelola Order</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('product') ?>">Product</a></li>
                <li class="breadcrumb-item active">Kelola Order</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-0">
                        <!-- Main Content -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Username</th>
                                        <th>Design Image</th>
                                        <!-- Other necessary columns -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($requested_clothes as $order) : ?>
                                        <tr>
                                            <td><?php echo $order['request_id']; ?></td>
                                            <td><?php echo $order['username']; ?></td>
                                            <td>
                                                <img src="<?php echo base_url('assets/custom_desain/' . $order['image_url']); ?>" width="100" height="100" alt="Design Image">
                                            </td>
                                            <!-- Other necessary columns -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </main>