<?php

function search_users(array $users, $searchContent = " "){
    $filter = [];
    foreach($users as $v1){
        if((strpos($v1["name"], $searchContent) !== false) || (strpos($v1["last_name"], $searchContent) !== false)){
            foreach($v1 as $v2){
                $filter[] = $v2;
            }
        }
    }
    return $filter;
} 

$users = [
    [
        "name" => "Goca",
        "last_name" => "Tržan",
        "img" => "<img src='./img/goca.jpg' width='60'>"
    ],

    [
        "name" => "Nikola",
        "last_name" => " Rokvić",
        "img" => "<img src='./img/nikola.jpg' width='60'>"
    ],

    [
        "name" => "Nenad",
        "last_name" => "Knežević",
        "img" => "<img src='./img/nenad.jpg' width='60'>"
    ],

    [
        "name" => "Toni",
        "last_name" => "Zen",
        "img" => "<img src='./img/toni.jpg' width='60'>"
    ],

    [
        "name" => "Andrej",
        "last_name" => "Maričić",
        "img" => "<img src='./img/andrej.jpg' width='60'>"
    ]

];
    
$searchContent= "o"; // UNETA VREDNOST
$result = search_users($users, $searchContent);
    
foreach($result as $v){
    echo $v;
    echo "<br>";
}

?>