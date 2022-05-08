<?php
$puz = 0;
$drvo = 100;
$dan = 0;

while($puz!=$drvo){
    $puz+=3;
    $drvo+=1;
    $dan++;
    echo "Dan $dan: Puz je presao $puz cm, visina drveta $drvo cm<br>";
}
echo "Puz se popeo na vrh drveta za $dan dana.";
?>