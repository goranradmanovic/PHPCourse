<?php

//Numericki niz

$fruit = array('Apple', 'Pears', 'Bananas', 'Lemon', 'Orange');

//Asocijativni niz

$cars = array('Ferrari' => 'Modena', 'AstonMartin' => 'Vanquis', 'Bently' => 'Continental GT', 'Audi' => 'R8');

//Ispis sadrzaja nizova uz pomoci var_dump() funkc.

var_dump($fruit); #Ispis numerickog niza

var_dump($cars); #Ispis asocijativnog niza

//Ispis pojednog el. niza

var_dump($fruit[1]); #Ispis numerickog niza

var_dump($cars['AstonMartin']); #Ispis asocijativnog niza

//Ispis sa echo u novoj liniji

echo "$fruit[1]\n"; #Ispis numerickog niza

echo "$cars[AstonMartin]\n"; #Ispis asocijativnog niza

//Multidimenzionalni array tj. niz

$food = array('Healty' => array('Salat', 'Vegetables', 'Fruit'), 'Unhealty' => array('Pizza', 'Burger', 'HotDog'));

var_dump($food); #Ispis multidimenzonalnog niza sa var_dump

//Ispis pojednog el. multidimenzonalnog niza sa echo

echo 'First el. of Healty array is ' , $food['Healty'][0] , "\n"; #Zdrava hrana

echo 'Second el. of Unhealty array is ' , $food['Unhealty'][2] , "\n"; #Nezdrava hrana

?>