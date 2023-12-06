<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Request Custom Clothing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        /* Styling untuk tema gelap */
        body {
            background-color: #333;
            color: #fff;
        }

        .form-container {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
        }

        /* Tambahkan CSS lainnya sesuai kebutuhan */
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Request Custom Clothing</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <form action="<?php echo site_url('design/submit_request') ?>" method="post">
                        <div class="mb-3">
                            <label for="design_id" class="form-label">Select Design ID:</label>
                            <input type="text" class="form-control" id="design_id" name="design_id" value="<?php echo $design_id; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="fabric_id" class="form-label">Select Fabric:</label>
                            <select class="form-select" id="fabric_id" name="fabric_id" required>
                                <option value="">Choose Fabric</option>
                                <?php foreach ($fabrics as $fabric) : ?>
                                    <option value="<?php echo $fabric['fabric_id']; ?>"><?php echo $fabric['nama_fabric']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Select Clothing Type:</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Select Size:</label>
                            <input type="text" class="form-control" id="size" name="size" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
