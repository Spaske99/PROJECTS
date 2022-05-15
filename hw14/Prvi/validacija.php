<?php

//DA LI SU VREDNOSTI POSLATE
if (!empty($_GET['day'])){
    $day = $_GET['day'];
}
else{
    die("Morate uneti Dan .");
}
if (!empty($_GET['month'])){
    $month = $_GET['month'];
}
else{
    die("Morate uneti Mesec .");
}
if (!empty($_GET['year'])){
    $year = $_GET['year'];
} 
else{
    die("Morate uneti Godinu .");
}

////DA LI SU VREDNOSTI iSPRAVNE
if(!is_numeric($day) || !is_numeric($month) || !is_numeric($year)){
    die("Sve vrednosti moraju biti broj");
}
if($day < 1 || $day > 31){
    die("Unesite dan od 1. do 31.");
}
if($month < 1 || $month > 12){
    die("Unesite mesec od 1. do 12.");
}
if($year < 1970 || $year > date("Y")){
    die("Unesite godinu od 1970. do " . date("Y") . ".");
}
if(checkdate($month, $day, $year)){
    echo "Datum je validan";
}
else{
    echo "Datum nije validan";
}

?>