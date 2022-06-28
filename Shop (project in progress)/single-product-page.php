<?php
session_start();
require_once __DIR__ . "/models/shop-model.php";

if(!empty($_GET['page'])) {
    $productId = $_GET['page'];
}

$product = getOneProductById($productId);
$next = getNextProduct($productId);
$prev = getPrevProduct($productId);

$relatedProducts = getRelatedProducs($product);

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";