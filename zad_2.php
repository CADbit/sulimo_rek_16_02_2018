<?php

	include 'klasy/autoload.php';

	$arg = ['imie' => 'Jan', 
			'nazwisko' => 'Kowalski',
			'data_urodzenia' => '13.03.1996',
			'nr_indeksu' => '32456',
			'stypendium' => 320,
			'badania_lekarskie' => null,
			'pensja' => 0

		];

	$PS1 = new PracujacyStudent($arg);


	echo $PS1->getDane();

	
?>
