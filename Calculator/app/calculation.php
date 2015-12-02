<?php

//Pokretanje sesije za cuvanje i slanje podataka
session_start();

//Var. errors koja ce biti niz za cuvanje gresaka uz forme
$errors = [];

//Provjeravamo da li postoji Serverska Superglobalna varijabla $_POST

if (!isset($_POST))
{
	//Ako ne postoji redirektujemo korisnika nazad na formu
	header('Location: ../public');
}

//Provjera da li postoje i da li se salju podatci iz forme

if (isset($_POST['number1'], $_POST['number2'], $_POST['operation']))
{
	//Stvaranje niza u kojem cemo cuvati vrijednosti polja iz forme
	$fields = [
		'number1' => $_POST['number1'],
		'number2' => $_POST['number2'],
		'operation' => $_POST['operation'],
	];

	//Prolaz kroz niz vrijednosti iz forme

	foreach ($fields as $field => $data)
	{
		//Provjera da li je neko polje iz forme prazno
		if (empty($data))
		{
			//Smijestanje naziva polja iz forme koje je prazno u poruku koju cuvamo u var. errors koji je niz
			$errors[] = 'The ' . $field . ' is required.';
		}
	}

	//Smijestamo vrijednosti iz niza u kome cuvamo vrijednosti iz forme u obicne var. koje lakse mozemo korisititi u racunanju
	$number1 = $fields['number1'];
	$number2 = $fields['number2'];
	$operation = $fields['operation'];

	//Provjera da li su unijeti podatci u prva dva polja iz forme brojevi

	if (is_numeric($fields['number1']) and is_numeric($fields['number2']))
	{
		//Switch kontrolna struktura koja provjerava koju smo matem. operaciju izabrali
		//i izvrsavanje mat. radnje u zavisnosti od operacije koju smo izabrali

		switch ($operation) {
			case '+':
				$result = $number1 + $number2;
			break;
			case '-':
				$result = $number1 - $number2;
			break;
			case '*':
				$result = $number1 * $number2;
			break;
			case '/':
				$result = $number1 / $number2;
			break;
		}

		//Cuvanje rezultata u Sessiji da bi ga mogli prenijeti na st. gdje se nalazi forma radi ispisa
		$_SESSION['result'] = $result;

		//Redirekcija na index.php ako je racunaje izvrsitio dobro
		header('Location: ../public/index.php');
	}
	else
	{
		//Ako unijeti podatci nisu brojevi redirektujemo korisnika nazad na formu
		$errors[] = 'Please enter valid number.';
	}
}
else
{
	$errors[] = 'Something went wrong.';
}

//Smijestanje vrijednosti gresaka i vrijednosti polja forme u sesiju da bi ih mogli prenijeti na index.php radi ispisa
//gresaka u formi ili podataka ako korisnik nesto pogrijesi

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

//Redirekcija na index.php
header('Location: ../public/index.php');

?>