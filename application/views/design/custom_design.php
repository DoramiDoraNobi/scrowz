<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Your Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: white;
        }
        .container {
            padding-top: 50px;
        }
        .form-container {
            background-color: #454d55;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .product-example {
            margin-top: 30px;
        }
        .product-example img {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2>Upload Your Design</h2>
                    <p>Harga untuk membuat pakaian dari desain Anda:</p>
                    <ul>
                        <li>Jaket: $50</li>
                        <li>T-shirt: $30</li>
                        <li>Celana: $40</li>
                    </ul>
                    <form action="<?php echo site_url('design/upload_design') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="fileInput" class="form-label">Upload Your Design</label>
                            <input class="form-control" type="file" id="fileInput" name="userfile">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center product-example">
            <div class="col-md-6">
                <h2>Contoh Produk</h2>
                <div class="card">
                    <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Contoh Produk">
                    <div class="card-body">
                        <h5 class="card-title">Jaket / T-shirt / Celana</h5>
                        <p class="card-text">Ini adalah contoh gambar produk pakaian yang bisa Anda desain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
