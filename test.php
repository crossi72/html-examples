<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/test.js"></script>
</head>
<body>
<nav class="comandi">
	<input type="button" id="rosso" value="rosso">
	<input type="button" id="giallo" value="giallo">
	<input type="button" id="alterna" value="alterna">
</nav>
	<?php eta_abitanti([1, 5, 19, 10, 23]); ?>
</body>
</html>

<?php

function minimo($valori){
	//inizializzo il risultato al primo elemento dell’array
	$risultato = $valori[0];
	//ciclo sugli altri elementi e verifico se c’è un elemento più piccolo di quello corrente
	for($i = 1; $i < count($valori); $i++){
		if($valori[$i] < $risultato){
			//il valore corrente è minore del risultato: aggiorno il risultato
			$risultato = $valori[$i];
		}
	}
	
	//restituisco il risultato
	return $risultato;
}

function abitanti($eta) {
	//cerco l’età minima utilizzando la funzione minimo
	$minimo = minimo($eta);
	$massimo = max($eta);
	$maggiorenni = 0;

	for($i = 0; $i < count($eta); $i++) {
		if($eta[$i] >= 18) {
			$maggiorenni++;
		}
	}

	echo "<div>";
	echo "Età del più giovane: " . $minimo . "<br>";
	echo "Età del più anziano: " . $massimo . "<br>";
	echo "Numero di maggiorenni: " . $maggiorenni;
	echo "</div>";
}

function eta_abitanti($eta) {
	echo '<table class="age-table">';
	$count = 0;
	foreach($eta as $anno) {
		echo '<tr class="' . ($count % 2 == 0 ? 'even' : 'odd') . '">';
		if($anno >= 18) {
			echo '<td class="adult">' . $anno . '</td>';
		} else {
			echo '<td class="child">' . $anno . '</td>';
		}
		echo '</tr>';
		$count++;
	}
	echo '</table>';
}

?>

<style>
.age-table td {
	padding: 8px;
	border: 1px solid #ccc;
}

.age-table .even {
	background-color: #f1f1f1;
}

.age-table .adult {
	font-weight: bold;
}

.age-table .child {
	font-style: italic;
}
</style>