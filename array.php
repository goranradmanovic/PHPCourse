<?php

echo '<pre>'; //Ispisujemo HTML <pre> tag za formatiranje coda i nizova

//Stvaramo Numericki niz
$fruit = array('Apple', 'Pears', 'Bananas', 'Lemon', 'Orange');

//Stvaramo Asocijativni niz
$cars = array('Ferrari' => 'Modena', 'AstonMartin' => 'Vanquis', 'Bently' => 'Continental GT', 'Audi' => 'R8');

//Ispis sadrzaja nizova uz pomoci var_dump() funkc.

echo "Ispis numerickog niza sa var_dump() funk.\n";
echo var_dump($fruit) , "\n"; #Ispis numerickog niza

echo "Ispis asocijativnog niza sa var_dump() funk.\n";
echo var_dump($cars) , "\n"; #Ispis asocijativnog niza

//Ispis pojednog el. niza

echo "Ispis jednog el. numerickog niza sa var_dump() funk.\n";
echo var_dump($fruit[1]) , "\n"; #Ispis jednog el. numerickog niza

echo "Ispis jednog el. asocijativnog niza sa var_dump() funk.\n";
echo var_dump($cars['AstonMartin']) , "\n"; #Ispis jednog el. asocijativnog niza

//Ispis sa echo u novoj liniji

echo "Ispis jednog el. numerickog niza\n";
echo $fruit[1] , "\n\n"; #Ispis jednog el. numerickog niza

echo "Ispis jednog el. asocijativnog niza\n";
echo $cars['AstonMartin'] , "\n\n"; #Ispis jednog el. asocijativnog niza

//Stvaramo Multidimenzionalni array tj. niz
$food = array('Healty' => array('Salat', 'Vegetables', 'Fruit'), 'Unhealty' => array('Pizza', 'Burger', 'HotDog'));

echo "Ispis multidimenzonalnog niza sa var_dump() funk.";
echo var_dump($food) , "\n"; #Ispis multidimenzonalnog niza sa var_dump

//Ispis pojednog el. multidimenzonalnog niza sa echo

echo "Ispis pojedinacnih el. multidimenzonalnog niza.\n\n";

echo 'First el. of Healty array is ' , $food['Healty'][0] , "\n"; #Zdrava hrana

echo 'Second el. of Unhealty array is ' , $food['Unhealty'][2] , "\n"; #Nezdrava hrana

echo '</pre>'; #Zatvaramo HTML <pre> tag za formatiranje coda i nizova

?>