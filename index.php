<?php
	define('DEBUG', TRUE)
	echo "Hello world!!";

	function add($num1,$num2){
		$resulut = $num1 + $num2;
		return $resulut;
	}

	$resulut = add(1,1);
	echo $resulut;

	class Robot{
		private $name;

		function setName($name){
			$this->name = $name;
		}

		function getName(){
			return $this->name;
		}
	}

	$robot = new Robot();
	$robot->setName('ドラえもん');

	function minus($num1,$num2){
		$resulut = $num1 - $num2;
		return $resulut;
	}

	$resulut = minus(10,4);
	echo $resulut;

	//デバック用関数の定義
	function org_echo($val){
		if (DEBUG) {
			echo $val;
			echo '<br>';
		}
	}
?>