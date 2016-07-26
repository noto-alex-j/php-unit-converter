<?php

class Temperature{
	function initialize(input){
		$temp = input.to_i;
	}

	function farenheitToCelsius{
		(($temp - 32) * 5 / 9).to_s + "° C";
	}

	function celsiusToFarenheit{
		($temp * 9 / 5 + 32).to_s + "° F";
	}
}

class Distance{
	function initialize(input){
		$distance = input.to_f;
	}

	function milesToKilometers{
		($distance * 1.61).to_s + " kilometers";
	}

	function kilometersToMiles{
		($distance * 0.62).to_s + " miles";
	}
}

class Weight{
	function initialize(input){
		$weight = input.to_f;
	}

	function poundsToKilograms{
		($weight * 0.45).to_s + " kilograms";
	}

	function kilogramsToPounds{
		($weight * 2.2).to_s + " pounds";
	}

	function poundsToStone{
		($weight * 0.07).to_s + " stone";
	}

	function stoneToPounds{
		($weight * 14).to_s + " pounds";
	}

	function kilogramstoStone{
		($weight * 0.16).to_s + " stone";
	}

	function stoneToKilograms{
		($weight * 6.35).to_s + " kilograms";
	}
}



?>


