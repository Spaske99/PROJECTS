<?php

require_once __DIR__ . "/models/shop-model.php";

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

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-shop.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";