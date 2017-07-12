<?php
$compteur=0;
$nombre1=146;
$rand1=rand(0,1000);

     while ($rand1!=$nombre1)
           {
            $rand1=rand(0,1000);
            $compteur++;
        }
     echo 'Il a fallu '.$compteur.' essai(s) pour arriver au résultat, qui est : '.$rand1.'<br>';
            
?>
<br><br>
<?php
$nombre2=146;
$i1=rand(0,1000);
    for ($compteur1=1;$i1!=$nombre2;$compteur1++) { 
        $i1=rand(0,1000);
        
    }
    echo 'Il a fallu '.$compteur1.' essai(s) pour arriver au résultat, qui est : '.$i1.'<br>';
?>