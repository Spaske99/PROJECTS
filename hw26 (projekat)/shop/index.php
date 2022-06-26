<?php
session_start();
require_once __DIR__ . "/models/shop-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";


$index='index';
$popular = getPopularProducts();

$items = getShoppingCart();

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-index.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";