<?php
$tableau =array
(
		"Cartman"=>array("Eric","South Park",8),
		"Broflovski"=>array("Kyle","South Park",8),
		"Marsh"=>array("Stan","South Park",8),
		"McCormick"=>array("Kenny","South Park",8),

);

	foreach($tableau as $key =>$value) {

echo "L'élément clé est : $key<br />";

foreach($value as $ind =>$val)

{

echo

"Elément

$ind :", $val, "<br />";

}

}

?>