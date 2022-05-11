<?php

//SVE PROMENLJIVE SAM VAN FUNKCIJE I UNUTAR NJE ISTO NAZVAO KAKO BI MI BILO LAKSE,
//ZNAM DA SU PROMENLJIVE VAN FUNKCIJE I U ZAGRADI FUNKCIJE() PRICA ZA SEBE I DA SE NE MORAJU ISTO ZVATI. 
//BROJEVI SU ZAOKRUZENI NA DVE DECIMALE round(_, 2).

//VARIJANTA 1 (Ukoliko su iste vrednosti za sve)

$sirina = 3;
$duzina = 5;
$poluprecnik = $sirina / 2;

// PRAVOUGAONI BAZEN
function p_pravougaonika($sirina, $duzina){
    $povrsina = $sirina * $duzina;
    return $povrsina;
}

// OKRUGLI BAZEN
function p_kruga($poluprecnik){
    $povrsina = pi() * ($poluprecnik * $poluprecnik);
    return $povrsina;
}

// KOMBINOVANI BAZEN
function p_kombinovanog($sirina, $duzina, $poluprecnik){
    $povrsina = p_pravougaonika($sirina, $duzina) + (p_kruga($poluprecnik) / 2);
    return $povrsina;
}

//UKUPNA POVRSINA SVA 3
function ukupna_p($sirina, $duzina, $poluprecnik){
    $povrsina = p_pravougaonika($sirina, $duzina) + p_kruga($poluprecnik) + p_kombinovanog($sirina, $duzina, $poluprecnik);
    return $povrsina;
}


echo "Povrsina pravougaonog bazena je: " . round(p_pravougaonika($sirina, $duzina), 2) . "<br>";
echo "Povrsina okruglog bazena je: " . round(p_kruga($poluprecnik), 2) . "<br>";
echo "Povrsina kombinovanog bazena je: " . round(p_kombinovanog($sirina, $duzina, $poluprecnik), 2) . "<br>";
echo "Ukupna povrsina sva tri bazena je: " . round(ukupna_p($sirina, $duzina, $poluprecnik), 2);


//VARIJANTA 2 (Ukoliko su vrednosti razlicite)

// PRAVOUGAONI BAZEN
// $sirina = 3;
// $duzina = 5;

// function p_pravougaonika($sirina, $duzina){
//     $povrsina = $sirina * $duzina;
//     return $povrsina;
// }

// // OKRUGLI BAZEN
// $poluprecnik = 4;

// function p_kruga($poluprecnik){
//     $povrsina = pi() * ($poluprecnik * $poluprecnik);
//     return $povrsina;
// }

// // KOMBINOVANI BAZEN
// $sirina2 = 6;
// $duzina2 = 8;
// $poluprecnik2 = $sirina2 / 2;

// function p_kombinovanog($sirina2, $duzina2, $poluprecnik2){
//     $povrsina = p_pravougaonika($sirina2, $duzina2) + (p_kruga($poluprecnik2) / 2);
//     return $povrsina;
// }

// //UKUPNA POVRSINA SVA 3

// function ukupna_p($sirina, $duzina, $poluprecnik, $sirina2, $duzina2, $poluprecnik2){
//     $povrsina = p_pravougaonika($sirina, $duzina) + p_kruga($poluprecnik) + p_kombinovanog($sirina2, $duzina2, $poluprecnik2);
//     return $povrsina;
// }


// echo "Povrsina pravougaonog bazena je: " . round(p_pravougaonika($sirina, $duzina), 2) . "<br>";
// echo "Povrsina okruglog bazena je: " . round(p_kruga($poluprecnik), 2) . "<br>";
// echo "Povrsina kombinovanog bazena je: " . round(p_kombinovanog($sirina2, $duzina2, $poluprecnik2), 2) . "<br>";
// echo "Ukupna povrsina sva tri bazena je: " . round(ukupna_p($sirina, $duzina, $poluprecnik, $sirina2, $duzina2, $poluprecnik2), 2);
 ?>