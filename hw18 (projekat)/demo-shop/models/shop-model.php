<?php
function getAllProducts(){
    return 
        $products=[
            [
                'id' => 1,
                'title' => "Assassins Creed",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/AssassinsCreed.jpeg",
                'price' => '5.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 2,
                'title' => "Assassins Creed",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/AssassinsCreed-ps5.jpg",
                'price' => '5.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 3,
                'title' => "GTA 5",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gta.jpg",
                'price' => '3.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 4,
                'title' => "GTA 5 ",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gta5-ps5.jpg",
                'price' => '3.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 5,
                'title' => "FIFA22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/FIFA22.jpg",
                'price' => '9.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 6,
                'title' => "NBA2K22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/nba.jpg",
                'price' => '5.500,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 8,
                'title' => "Mortal Kombat",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/mortal.jpg",
                'price' => '2.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 9,
                'title' => "Ghost Of Tsushima",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/ghost-of-tsushima.jpg",
                'price' => '9.500,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 10,
                'title' => "Gravel",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gravel.jpg",
                'price' => '3.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 11,
                'title' => "Project Cars 3",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/project-cars.jpg",
                'price' => '2.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 12,
                'title' => "Hotel Transylvania",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/hoteltransylvania.jpg",
                'price' => '4.999,00',
                'category' => "Game",
                'available' => false
            ],
            [
                'id' => 14,
                'title' => "Watch Dogs 2",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/watch-dogs.jpg",
                'price' => '2.999,00',
                'category' => "Game",
                'available' => true
            ],
            [
                'id' => 7,
                'title' => "Batman",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/batman.jpg",
                'price' => '1.500,00',
                'category' => "Game",
                'available' => false
            ],
            [
                'id' => 13,
                'title' => "Universe",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/universe.jpg",
                'price' => '1.500,00',
                'category' => "Game",
                'available' => false
            ]
            
        ];
}

const ORDER_BY_PRICE_ASC='price-asc';   
const ORDER_BY_PRICE_DSC='price-desc';

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function sorting ($products, $sort) {
    
    if($sort == ORDER_BY_PRICE_ASC){
        array_multisort(array_column($products, 'price'), SORT_ASC, $products);
        return $products;
    }elseif ($sort == ORDER_BY_PRICE_DSC) {
        array_multisort(array_column($products, 'price'), SORT_DESC, $products);
        return $products;
    }elseif($sort == ""){
        return $products;
    }
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term)) {
            $filteredProducts[] = $product;
        }
    }
    return $filteredProducts;   
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    shuffle($products);
    foreach ($products as $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}

function getNextProduct($currentProductId) {
    $products = getAvailableProducts();
    $numberOfProducts = count($products);
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == $numberOfProducts-1) {
                return $products[0];
            } else {
                return $products[$key + 1];
            }
        }
    }
    
}

function getPrevProduct($currentProductId) {
    $products = getAvailableProducts();
    $numberOfProducts = count($products);
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == 0) {
                return $products[$numberOfProducts-1];
            } else {
                return $products[$key - 1];
            }
        }
    }
}



?>