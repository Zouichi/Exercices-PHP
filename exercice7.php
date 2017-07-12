<?php
	$tableau= array('Marsh'=>array('Stan','South Park',8),
					'Broflovski'=>array('Kyle','South Park',8),
					'Cartman'=>array('Eric','South Park',8),
					'McCormick'=>array('Kenny','South Park',8)
		);
		echo "<pre>";
		print_r($tableau);
		echo "</pre>";
?>
_________________________________________________________________________
<br>
_________________________________________________________________________
<?php
$tableau1['Marsh']=array('Stan','South Park',8);
$tableau1['Broflovski']=array('Kyle','South Park',8);
$tableau1['Cartman']=array('Eric','South Park',8);
$tableau1['McCormick']=array('Kenny','South Park',8);

		echo "<pre>";
		print_r($tableau1);
		echo "</pre>";
?>
_________________________________________________________________________
<br>
_________________________________________________________________________
<?php
$tableau2=array('Nom' => 'Marsh','Prénom' => 'Stan','Ville' => 'South Park','Age' => '8');
$tableau3=array('Nom' => 'Broflovski','Prénom' => 'Kyle','Ville' => 'South Park','Age' => '8');
$tableau4=array('Nom' => 'Cartman','Prénom' => 'Eric','Ville' => 'South Park','Age' => '8');
$tableau5=array('Nom' => 'McCormick','Prénom' => 'Kenny','Ville' => 'South Park','Age' => '8');

		echo "<pre>";
		print_r($tableau2);
		echo "</pre>";
		echo "<pre>";
		print_r($tableau3);
		echo "</pre>";
		echo "<pre>";
		print_r($tableau4);
		echo "</pre>";
		echo "<pre>";
		print_r($tableau5);
		echo "</pre>";

?>