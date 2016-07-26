<?php

class Temperature{
	var $temp;

	function __construct($input){
		$this->temp = $input;
	}

	function farenheitToCelsius(){
		return(($this->temp - 32) * 5 / 9) . "° C";
	}

	function celsiusToFarenheit(){
		return($this->temp * 9 / 5 + 32) . "° F";
	}
}

class Distance{
	var $distance;

	function __construct($input){
		$this->distance = $input;
	}

	function milesToKilometers(){
		return ($this->distance * 1.61) . " kilometers";
	}

	function kilometersToMiles(){
		return ($this->distance * 0.62) . " miles";
	}
}

class Weight{
	var $weight;

	function __construct($input){
		$this->weight = $input;
	}

	function poundsToKilograms(){
		return ($this->weight * 0.45) . " kilograms";
	}

	function kilogramsToPounds(){
		return ($this->weight * 2.2) . " pounds";
	}

	function poundsToStone(){
		return ($this->weight * 0.07) . " stone";
	}

	function stoneToPounds(){
		return ($this->weight * 14) . " pounds";
	}

	function kilogramstoStone(){
		return ($this->weight * 0.16) . " stone";
	}

	function stoneToKilograms(){
		return ($this->weight * 6.35) . " kilograms";
	}
}



?>

