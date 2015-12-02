<?php

//Funkcija za ciscenje izlaznih podataka iz forme
function escape($string)
{
	return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

?>