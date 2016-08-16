<?php
	echo "Hello world!!";

	function add($num1,$num2){
		$resulut = $num1 + $num2;
		return $resulut;
	}

	$resulut = add(1,1);
	echo $resulut;

	function minus($num1,$num2){
		$resulut = $num1 - $num2;
		return $resulut;
	}

	$resulut = minus(10,4);
	echo $resulut;

?>