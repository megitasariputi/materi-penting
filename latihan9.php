<?php 
	$coba = array('Abdul'=>array(45,32,15),
 				  'Budi'=>array(70,85,60),
				  'Tri'=>array(65,75,80)
				 );

	$rata1 = number_format(($coba['Abdul'][0] + $coba['Abdul'][1] + $coba['Abdul'][2]) / 3);
	$rata2 = number_format(($coba['Budi'][0] + $coba['Budi'][1] + $coba['Budi'][2]) / 3);
	$rata3 = number_format(($coba['Tri'][0] + $coba['Tri'][1] + $coba['Tri'][2]) / 3);


	echo "Nilai rata-rata dari Abdul adalah $rata1";
	echo "<br>";
	echo "Nilai rata-rata dari Budi adalah $rata2";
	echo "<br>";
	echo "Nilai rata-rata dari Tri adalah $rata3";
?>