<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <title>Shop</title>
</head>

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container">
                <a class="navbar-brand text-light" href="#">LOGO PAGE SITE</a>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./all-products-page.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a class="nav-link position-relative" href="./shopping-cart-page.php">
                        Shopping Cart
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php 
                            if(!empty($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo 0;
                            }
                            ?>
                        </span>
                    </a>
                </div>
            </div>
        </nav>
    </header>