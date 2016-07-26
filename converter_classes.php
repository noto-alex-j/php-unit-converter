<?php

class Temperature{
	function __construct(input){
		var $temp = input;
	}

	function farenheitToCelsius(){
		(($temp - 32) * 5 / 9) . "° C";
	}

	function celsiusToFarenheit(){
		($temp * 9 / 5 + 32) . "° F";
	}
}

class Distance{
	function __construct(input){
		var $distance = input;
	}

	function milesToKilometers(){
		($distance * 1.61) . " kilometers";
	}

	function kilometersToMiles(){
		($distance * 0.62) . " miles";
	}
}

class Weight{
	function __construct(input){
		var $weight = input;
	}

	function poundsToKilograms(){
		($weight * 0.45) . " kilograms";
	}

	function kilogramsToPounds(){
		($weight * 2.2) . " pounds";
	}

	function poundsToStone(){
		($weight * 0.07) . " stone";
	}

	function stoneToPounds(){
		($weight * 14) . " pounds";
	}

	function kilogramstoStone(){
		($weight * 0.16) . " stone";
	}

	function stoneToKilograms(){
		($weight * 6.35) . " kilograms";
	}
}



?>


