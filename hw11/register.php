<?php


if((empty($_GET['name']) == false) && (empty($_GET['surname']) == false) && isset($_GET['gender'])){
    echo  $_GET['gender'] . " " . $_GET['name'] . " " . $_GET['surname'] . ", Uspesno ste se registrovali na nasem sajtu. <br>";
}
else{
    echo "Nisu popunjena sva polja ! <br>";
} 

if(empty($_GET['email'])){
    echo "Unesi email ! <br>";
}
else{
    echo "Vas email je: " . $_GET['email'] . "<br>";
}   


if(empty($_GET['password'])){
    echo "Unesi lozinku ! <br>";
}
else{
    echo "Vasa lozinka je: " . $_GET['password'] . "<br>";
}


if(isset($_GET['courses'])){
    echo "Vasi odabrani kursevi su: ";
    foreach ($_GET['courses'] as $value)
        {
            echo $value . " ";
        } 
}
else{
    echo "Unesite kurs !";
}


?>





