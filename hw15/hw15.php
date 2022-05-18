<?php
//PRVI ZADATAK
//POSLE SVALE PROMENE U NIZU JE URADJEN PRINT_F KAKO BI SE VIDELA RAZLIKA U BROWSER-U.

$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];  
    print_r($hwArray);
    echo "<br>";
    if (in_array("Nenad", $hwArray)) {
        echo "Vec postoji !";
    }
    else{
        $hwArray[] = "Nenad";
    }
    print_r($hwArray);
    echo "<br>";
    if (in_array("Ilija", $hwArray)) {
        echo "Vec postoji !";
    }
    else{
        array_splice( $hwArray, '2', 0, "Ilija" ); 
    }
    print_r($hwArray);
    echo "<br>";
    echo "Ima " . count($hwArray) . " clanova niza.";
    echo "<br>";
    if (in_array("Sasa", $hwArray)) {
        echo "Vec postoji !";
    }
    else{
        array_unshift($hwArray,"Sasa");
    }
    print_r($hwArray);
    echo "<br>";
    unset($hwArray[6]);
    print_r (array_unique($hwArray));
    
    
//DRUGI ZADATAK

    // $data = [
    //     array(
    //     'name' => "Pera",
    //     'last_name' => "Peric",
    //     'age' => 28,
    //     'gender' => 'male',
    //     'avg_rating' => 7.5,
    //     'married' => true,
    //     'courses' => ['laravel', 'react','jQuery']),

    //     array(
    //     'name' => "Nenad",
    //     'last_name' => "Spasic",
    //     'age' => 22,
    //     'gender' => 'male',
    //     'avg_rating' => 6.5,
    //     'married' => false,
    //     'courses' => ['html', 'css','js']),

    //     array(
    //     'name' => "Tamara",
    //     'last_name' => "Spasic",
    //     'age' => 25,
    //     'gender' => 'female',
    //     'avg_rating' => 10,
    //     'married' => false,
    //     'courses' => ['html', 'css','php']),

    //     array(
    //     'name' => "Marko",
    //     'last_name' => "Cvetkovic",
    //     'age' => 23,
    //     'gender' => 'male',
    //     'avg_rating' => 9.9,
    //     'married' => false,
    //     'courses' => ['laravel', 'react','php']),

    //     array(
    //     'name' => "Monika",
    //     'last_name' => "Petrovic",
    //     'age' => 29,
    //     'gender' => 'female',
    //     'avg_rating' => 8.5,
    //     'married' => true,
    //     'courses' => ['js', 'php','wordPress'])


    //     ];

    // for($i=0; $i<count($data); $i++){
    //     if(($data[$i]["gender"] == "male") && ($data[$i]["married"] == true)){
    //         echo $data[$i]["name"] . " " . $data[$i]["last_name"] . " ima " . $data[$i]["age"] . " godina" . " i ozenjen je. Ima prosecnu ocenu " . $data[$i]["avg_rating"] . " a kurseve koje trenutno slusa su: " . implode(", ",$data[$i]["courses"]) . ".";
    //         echo "<br><br>";
    //     }
    //     elseif(($data[$i]["gender"] == "male") && ($data[$i]["married"] == false)){
    //         echo $data[$i]["name"] . " " . $data[$i]["last_name"] . " ima " . $data[$i]["age"] . " godina" . " i nije ozenjen. Ima prosecnu ocenu " . $data[$i]["avg_rating"] . " a kurseve koje trenutno slusa su: " . implode(", ",$data[$i]["courses"]) . ".";
    //         echo "<br><br>";
    //     }
    //     elseif(($data[$i]["gender"] == "female") && ($data[$i]["married"] == true)){
    //         echo $data[$i]["name"] . " " . $data[$i]["last_name"] . " ima " . $data[$i]["age"] . " godina" . " i udata je. Ima prosecnu ocenu " . $data[$i]["avg_rating"] . " a kurseve koje trenutno slusa su: " . implode(", ",$data[$i]["courses"]) . ".";
    //         echo "<br><br>";
    //     }
    //     elseif(($data[$i]["gender"] == "female") && ($data[$i]["married"] == false)){
    //         echo $data[$i]["name"] . " " . $data[$i]["last_name"] . " ima " . $data[$i]["age"] . " godina" . " i nije udata. Ima prosecnu ocenu " . $data[$i]["avg_rating"] . " a kurseve koje trenutno slusa su: " . implode(", ",$data[$i]["courses"]) . ".";
    //         echo "<br><br>";
    //     } 
    // }
    
?>