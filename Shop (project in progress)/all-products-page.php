<?php
session_start();
require_once __DIR__ . "/models/shop-model.php";

$shop='shop';
$filter = "";
$sort = "";

if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
if(!empty($_GET['sort-by'])) {
    $sort = $_GET['sort-by'];
}

$products = getAvailableProducts();

$products = sorting ($products, $sort);

$products = filteredProducts($products, $filter);

// SHOPPING CART (SESSION)
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if(isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $_SESSION['cart'][] = $_POST['product_id'];
}

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-shop.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";