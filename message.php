<?php
$compteur=0;

      do { 
     	$compteur++;
     	$rand1=rand(0,100);
     	$rand2=rand(0,100);
     	$rand3=rand(0,100);


		 if (($rand1%2)==0 AND ($rand2%2)!=0 AND ($rand3%2)!=0) {
		 	echo 'Il a fallu '.$compteur.' essai(s) pour arriver au résultat, qui est : '.$rand1.' - '.$rand2.' - '.$rand3.' <br>';
		 	break;
		 }
     
     } while ($compteur < 100);
?>