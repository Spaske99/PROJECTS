<?php
    if(!empty($_GET['tezina'])){
        $tezina = $_GET['tezina'];
    }
    else{
        echo '<span style="color:red";>Unesite svoju kilazu ! </span><br>';
    }
    if(!empty($_GET['godine'])){
        $faktor_starosti = $_GET['godine'];
    }
    else{
        echo '<span style="color:red";> Izaberite starosni opseg ! </span><br>';
    }
    if(!empty($_GET['aktivnost'])){
        $faktor_aktivnosti = $_GET['aktivnost'];
    }
    else{
        echo '<span style="color:red";> Izaberite profesiju ! </span>';
    }
    

    if(!empty($_GET['tezina'] && $_GET['godine'] && $_GET['aktivnost'])){
        $max_kalorija = $tezina * $faktor_aktivnosti * $faktor_aktivnosti;
        echo "Maksimalno smete uneti " . $max_kalorija . " kalorija .";
    }
?>