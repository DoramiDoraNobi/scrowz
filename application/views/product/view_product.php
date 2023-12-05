<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Scrowz Archive - Product</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/index/style.css') ?>"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-white ">
        <!-- ... -->
    </nav>
    <!--End Navbar-->

    <!-- Product -->
    <div class="product">
        <div class="container">
            <!-- Loop through products here -->
            <?php foreach ($products as $product): ?>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url('img/produk/' . $product['image']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text"><b>Price: <?php echo $product['price']; ?></b></p>
                                <p class="card-text"><b>Material:</b> <?php echo $product['material']; ?>, <b>Color:</b> <?php echo $product['color']; ?>, <b>Size:</b> <?php echo $product['size']; ?>.</p>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the product card structure for each product -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <!-- ... -->
    </footer>
</body>
</html>
