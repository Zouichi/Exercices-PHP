<?php
$rayon=5;
$hauteur=14;

define("Pi",M_PI);

$volume = sqrt($rayon) * Pi * $hauteur * (1/3);


function VolumeCone($rayon, $hauteur)
{
$volume = pow($rayon, 2) * Pi * $hauteur * (1/3);
return $volume;
}
echo 'Le volume est de '. $volume .' cm<sup>3</sup>';
?>
<br>
<?php

const PI = M_PI;
$volume = pow($rayon, 2) * Pi * $hauteur * (1/3);
return $volume;
echo PI;
?>