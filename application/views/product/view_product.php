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
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url('assets/product/' . $product['image_url']); ?>" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text"><b>Description: <?php echo $product['description']; ?></b></p>
                                <p class="card-text"><b>Price: <?php echo $product['price']; ?></b></p>
                                <p class="card-text"><b>Stock: <?php echo $product['stock']; ?></b></p>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <!-- ... -->
    </footer>
</body>
</html>

    <!-- footer -->
    <footer>
        <!-- ... -->
    </footer>
</body>
</html>
