<?php
$nombre=45;
$compteur=0;
$i=rand(1,1000);

    while($i%$nombre!=0) {

        $i=rand(1,1000);
        $compteur++;

    }
    echo $i . " est un multiple de " . $nombre . ". Il a fallu " . $compteur . " essai(s) pour arriver au résultat.";
?>