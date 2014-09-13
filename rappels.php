<?php
	$carlos 	=50;
	$maria  	=160;
	$mama		=100;
	$papa		=80;
	
	$persons = array(
		'carlos' => $carlos,
		'maria' => $maria,
		'mama' => $mama,
		'papa' => $papa,
	);

	function add_new_personne($name) {
			
		return $name;
	}
	function calculate() {
		foreach( $persons as $key=> $value) {
			$total = $total + $value;
		}
		$total_output .='<div id="total_count">';
		$total_output .='<p>';
		$total_output .= 'Total = '. $total .' $';
		$total_output .='</p>';
		$total_output .='</div>';
		echo $total_output;
	}
	calculate();
?>

