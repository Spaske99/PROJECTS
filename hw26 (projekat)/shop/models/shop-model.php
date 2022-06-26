<?php
function getAllProducts(){
    return 
        $products=[
            [
                'id' => 1,
                'title' => "Assassins Creed",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/AssassinsCreed.jpeg",
                'price' => 5.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 3,
                'available' => false

            ],
            [
                'id' => 2,
                'title' => "Assassins Creed",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/AssassinsCreed-ps5.jpg",
                'price' => 5.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 3,
                'title' => "GTA 5",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gta.jpg",
                'price' => 3.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 4,
                'title' => "GTA 5 ",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gta5-ps5.jpg",
                'price' => 3.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 5,
                'title' => "FIFA22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/FIFA22.jpg",
                'price' => 9.999,00,
                'category' => "Game",
                'type' => "Sports",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 6,
                'title' => "NBA2K22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/nba.jpg",
                'price' => 5.499,00,
                'category' => "Game",
                'type' => "Sports",
                'stars' => 4,
                'available' => true
            ],
            [
                'id' => 7,
                'title' => "Mortal Kombat",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/mortalkombat.jpg",
                'price' => 2.999,00,
                'category' => "Game",
                'type' => "Fighting",
                'stars' => 3,
                'available' => true
            ],
            [
                'id' => 8,
                'title' => "Ghost Of Tsushima",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/ghost-of-tsushima.jpg",
                'price' => 9.499,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 9,
                'title' => "Gravel",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/gravel.jpg",
                'price' => 3.999,00,
                'category' => "Game",
                'type' => "Racing",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 10,
                'title' => "Project Cars 3",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/project-cars.jpg",
                'price' => 2.999,00,
                'category' => "Game",
                'type' => "Racing",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 11,
                'title' => "Hotel Transylvania",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/hoteltransylvania.jpg",
                'price' => 4.999,00,
                'category' => "Game",
                'type' => "For children",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 12,
                'title' => "Watch Dogs 2",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/watch-dogs.jpg",
                'price' => 2.999,00,
                'category' => "Game",
                'type' => "Acti on",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 13,
                'title' => "Batman",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/batman.jpg",
                'price' => 1.499,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 14,
                'title' => "Universe",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/universe.jpg",
                'price' => 1.499,00,
                'category' => "Game",
                'type' => "For children",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 15,
                'title' => "HORIZON",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/horizon.jpg",
                'price' => 8.499,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 4,
                'available' => true
            ],
            [
                'id' => 16,
                'title' => "The Last Of Us",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/The-Last-Of-Us.jpg",
                'price' => 1.499,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 17,
                'title' => "F1 22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/F1-22.jpg",
                'price' => 9.499,00,
                'category' => "Game",
                'type' => "Racing",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 18,
                'title' => "Spider Man",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/spider-man.jpg",
                'price' => 1.499,00,
                'category' => "Game",
                'type' => "Racing",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 19,
                'title' => "Avengers",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/avengers.jpg",
                'price' => 2.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 3,
                'available' => true
            ],
            [
                'id' => 20,
                'title' => "Battlefield",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/battlefield.jpg",
                'price' =>  7.499,00,
                'category' => "Game",
                'type' => "Shooting",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 21,
                'title' => "Call of Duty",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/Call-of-Duty.jpg",
                'price' => 9.999,00,
                'category' => "Game",
                'type' => "Shooting",
                'stars' => 5,
                'available' => true
            ],
            [
                'id' => 22,
                'title' => "Ghostwire",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/ghostwire.jpg",
                'price' => 8.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 5,
                'available' => true
            ],[
                'id' => 23,
                'title' => "MADDEN 22",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/madden-22.jpg",
                'price' => 1.499,00,
                'category' => "Game",
                'type' => "Sports",
                'stars' => 3,
                'available' => false
            ],
            [
                'id' => 24,
                'title' => "Tenis World Tour 2",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/TenisWorld-Tour-2.jpg",
                'price' => 6.499,00,
                'category' => "Game",
                'type' => "Sports",
                'stars' => 3,
                'available' => true
            ],[
                'id' => 25,
                'title' => "Uncharted",
                'description' => "Kada se mladi ulični prevarant, penzionisani pljačkaš banki i zastrašujući psihopata nađu upleteni u neke od najstrašnijih i najluđih elemenata kriminalnog podzemlja, Američke vlade i industrije zabave, moraju da uspešno obave niz opasnih pljački da bi preživeli u nemilosrdnom gradu u kojem nikome ne mogu verovati, a najmanje jedni drugima",
                'img' => "public/theme/img/uncharted.jpg",
                'price' => 5.999,00,
                'category' => "Game",
                'type' => "Action",
                'stars' => 4,
                'available' => true
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


function getPopularProducts() {
    $popular = [];
    $products = getAvailableProducts();
    shuffle($products);
    foreach ($products as $product) {
        if($product['stars'] == 5) {
            $popular[] = $product;
            if(count($popular) >= 4) {
                break;
            }
        }
    }
    return $popular;
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
        if(str_contains(strtolower($product['title']), strtolower($term)) || str_contains(strtolower($product['type']), strtolower($term))) {
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
        if($product['type'] == $mainProduct['type'] && $mainProduct['id'] != $product['id']) {
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


// function getOneProductById($id) {
//     global $products;

//     foreach($products as $product) {
//         if($product['id'] == $id) {
//             return $product;
//         }
//     }
// }


?>