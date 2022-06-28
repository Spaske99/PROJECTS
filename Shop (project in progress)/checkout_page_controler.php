<?php
session_start();
require_once __DIR__ . '/models/shop-model.php';

$id = $_GET['id'];
$quantity = $_GET['quantity'];

$choosen_product = getOneProductById($id);

$img = $choosen_product['img'];
$title = $choosen_product['title'];
$price = $choosen_product['price'];
$total_price = $quantity * $price;
$alt = $choosen_product['category'];

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-checkout_page.php';

require __DIR__ . '/views/_layout/v-footer.php';