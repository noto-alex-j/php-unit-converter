<?php include "converter-control.php" ?>


<?php 

$conversion = $_POST["conversion"];
$ks = $_POST["ks"];
$pk = $_POST["pk"];
$ps = $_POST["ps"];
$input = $_POST["input"];

if ($conversion == "ftoc" || $conversion == "ctof"){
	$temp = new Temperature($input);
	if ($conversion == "ftoc"){
		$output = $temp->farenheitToCelsius();
	}
	elseif ($conversion == "ctof"){
		$output = $temp->celsiusToFarenheit();
	}
elseif ($conversion == "mtok" || $conversion == "ktom"){
	$distance = new Distance($input);
	if ($conversion == "mtok"){
		$output = $distance->milesToKilometers();
	}
	elseif ($conversion == "ktom"){
		$output = $distance->kilometersToMiles();
	}
elseif ($conversion == "pounds" || $conversion == "kilos" || $conversion == "stone"){
	$weight = new Weight($input);
	if ($conversion == "pounds" && $ks == "kilos"){
		$output = $weight->poundsToKilograms();
	}
	elseif ($conversion == "pounds" && $ks == "stone"){
		$output = $weight->poundsToStone();
	}
	elseif ($conversion == "kilos" && $ps == "pounds"){
		$output = $weight->kilogramsToPounds();
	}
	elseif ($conversion == "kilos" && $ps == "stone"){
		$output = $weight->kilogramsToStone();
	}
	elseif ($conversion == "stone" && $pk == "kilos"){
		$output = $weight->stoneToKilograms();
	}
	elseif ($conversion == "stone" && $pk == "pounds"){
		$output = $weight->stoneToPounds();
	}
}


		

