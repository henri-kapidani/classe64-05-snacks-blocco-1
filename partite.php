<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

/*
campionato composto da una serie di partite
ogni partita ha 2 squadre
casa o ospite
nome
punti
*/

$arr_partite = [
	//partita 1
	[
		[
			'nome'		=> 'Olimpia Milano',
			'di_casa'	=> true,
			'punteggio'	=> 55
		],
		[
			'nome'		=> 'Cantù',
			'di_casa'	=> false,
			'punteggio'	=> 60
		],
	],
	//partita 2
	[
		[
			'nome'		=> 'Bari',
			'di_casa'	=> false,
			'punteggio'	=> 80
		],
		[
			'nome'		=> 'Napoli',
			'di_casa'	=> true,
			'punteggio'	=> 90
		],
	],
	//partita 3
	[
		[
			'nome'		=> 'Torino',
			'di_casa'	=> true,
			'punteggio'	=> 99
		],
		[
			'nome'		=> 'Roma',
			'di_casa'	=> false,
			'punteggio'	=> 105
		],
	],
];


/*
$arr_partite = [
	[
		'casa'	=> [
			'nome'		=> 'Olimpia Milano',
			'punteggio'	=> 55
		],
		'ospite'	=> [
			'nome'		=> 'Cantù',
			'punteggio'	=> 60
		],
	],
];
*/

/*
$arr_partite = [
	[
		['Roma', true, 101],
		['Torino', false, 99],
	],
];
*/

// var_dump($arr_partite); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><?php
	$arr_length = count($arr_partite);
	for ($_i = 0; $_i < $arr_length ; $_i++) {
		$partita = $arr_partite[$_i];

		// metodo 1
		echo "<div>{$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']}-{$partita[1]['punteggio']}</div>";

		// metodo 2
		echo '<div>' . $partita[0]['nome'] . ' - ' . $partita[1]['nome'] . ' | ' . $partita[0]['punteggio'] . '-' . $partita[1]['punteggio'] . '</div>';

		//metodo 3 ?>
		<div>
			<span class="<?= $partita[0]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[0]['nome'] ?></span>
			<span class="<?= $partita[1]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[1]['nome'] ?></span>
			<?= " | {$partita[0]['punteggio']}-{$partita[1]['punteggio']}" ?>
		</div><?php
	} ?>
</body>
</html>
