<?php

//PRVI ZADATAK

function emailCheck($array){
    for($i=0; $i < count($array); $i++){
        if(str_contains($array[$i], "@")){
            $validMail[]= $array[$i];
        }
    }
    for($j=0; $j < count($validMail); $j++){
        echo $validMail[$j];
        echo "<br>";
    }
}

$email = array("nenad.spasic.99@gmail.com", "ssasa.68gmail.com", "tamara.s.spasic@gmail.com","jeka1975@gmail.com");
emailcheck($email);


//DRUGI ZADATAK

// function racunaj($array, $simbol = '+'){
//     $ukupno = $array[0];
//     for($i=1; $i<count($array); $i++){
//         switch ($simbol) {
//             case '+':
//                 $ukupno += $array[$i];
//                 break;
//             case '-':
//                 $ukupno -= $array[$i];
//                 break;
//             case '*':
//                 $ukupno *= $array[$i];
//                 break;
//             case '/':
//                 $ukupno /= $array[$i];
//                 break;
//             case '%':
//                 $ukupno %= $array[$i];
//                 break;
//         }
//     }
//     return $ukupno;
// }

// $brojevi = array(3,26,19,1,42,74,8);
// $simbol = '*' ;
// echo racunaj($brojevi, $simbol);


//TRECI ZADATAK

// function doesKeyExist($array, $Key){
//     foreach ($array as $key => $value) {
//         if($Key === $key){
//             return "Uneseni kljuc vec postoji !";
//         }
//     }
// } 

// $niz = array("audi" => "a4", "citroen" => "c5", "mercedes" => "e270", "bmw" => "f10");
// $key = "audi";
// echo doesKeyExist($niz, $key);


?>