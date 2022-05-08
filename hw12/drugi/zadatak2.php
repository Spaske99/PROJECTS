<?php
if(!empty($_GET['sirina_z'])){
    $sirina_z = $_GET['sirina_z'];
}
else{
    echo '<span style="color: red;"> Unesite sirinu zida ! </span><br>';
}

if(!empty($_GET['visina_z'])){
    $visina_z = $_GET['visina_z'];
}
else{
    echo '<span style="color: red;"> Unesite visinu zida ! </span><br>';
}

if(!empty($_GET['sirina_p'])){
    $sirina_p = $_GET['sirina_p'];
}
else{
    echo '<span style="color: red;"> Unesite sirinu plocice ! </span><br>';
}

if(!empty($_GET['duzina_p'])){
    $duzina_p = $_GET['duzina_p'];
}
else{
    echo '<span style="color: red;"> Unesite duzinu plocice ! </span><br>';
}


if (!empty($_GET['sirina_z'] && $_GET['visina_z'] && $_GET['sirina_p'] && $_GET['duzina_p'])){
    $povrsina_z = $sirina_z * $visina_z;
    $povrsina_p = $sirina_p * $duzina_p;
    $broj_p = $povrsina_z / $povrsina_p;

echo "<strong>Potreban broj plocica je: </strong>" . $broj_p . ".";
}
?>