<?php

//NACIN 1 
function gorivo($ukupnoGorivo = 0, $potrposnjaPoKamionu = 1, $ostatakGorivaFlag = "0"){
    $ostatakGoriva = $ukupnoGorivo % $potrposnjaPoKamionu;
    $potrebnoGorivo = $ukupnoGorivo - $ostatakGoriva;
    $brojKamionaKojiMoguDaPredjuRutu = $potrebnoGorivo / $potrposnjaPoKamionu;

    if($ostatakGorivaFlag == true){
        return "Rutu mogu preci " . floor($brojKamionaKojiMoguDaPredjuRutu) . " kamiona.";
    }
    else{
        return "Ostalo je " . $ostatakGoriva . " litra goriva.";
    }
}

echo gorivo(-113,20);

//NACIN 2
// function gorivo($ukupnoGorivo, $potrposnjaPoKamionu, $ostatakGorivaFlag = "0"){
//     if($ostatakGorivaFlag == true){
//         $potrebnogorivo = $ukupnoGorivo - ($ukupnoGorivo % $potrposnjaPoKamionu);
//         $brojKamionaKojiMoguDaPredjuRutu = $potrebnogorivo / $potrposnjaPoKamionu;
//         return "Rutu mogu preci " . $brojKamionaKojiMoguDaPredjuRutu . " kamiona.";
//     }
//     else{
//         $ostatakGoriva = $ukupnoGorivo % $potrposnjaPoKamionu;
//         return "Ostalo je " . $ostatakGoriva . " litra goriva.";
//     }
// }

// echo gorivo(115, 25, true);

?>