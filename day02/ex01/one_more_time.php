#!/usr/bin/php
<?php
if ($argc < 2)
{
	exit(0);
}
$month = array(
	1 => "janvier",
	2 => "février",
	3 => "mars",
	4 => "avril",
	5 => "mai",
	6 => "juin",
	7 => "juillet",
	8 => "août",
	9 => "septembre",
	10 => "octobre",
	11 => "novembre",
	12 => "décembre");

$day = array(
	1 => "lundi",
	2 => "mardi",
	3 => "mercredi",
	4 => "jeudi",
	5 => "vendredi",
	6 => "samedi",
	7 => "dimanche");
date_default_timezone_set("Europe/Paris");

$date = explode(" ", $argv[1]);
//print_r($date);
$place = $argv[1];
if (array_search(lcfirst($date[0]), $day) == false)
{
	echo "Wrong Format\n";
    exit();
}
else
{
	$place = str_replace($date[0], '', $place);
}

if (array_search(lcfirst($date[2]), $month) == true)
{
$place = preg_replace('|novembre|i', 'nov', $place);
$place = preg_replace('|janvier|i', 'jan', $place);
$place = preg_replace('|février|i', 'feb', $place);
$place = preg_replace('|mars|i', 'mar', $place);
$place = preg_replace('|avril|i', 'apr', $place);
$place = preg_replace('|mai|i', 'may', $place);
$place = preg_replace('|juin|i', 'jun', $place);
$place = preg_replace('|juillet|i', 'jul', $place);
$place = preg_replace('|août|i', 'aug', $place);
$place = preg_replace('|septembre|i', 'sep', $place);
$place = preg_replace('|octobre|i', 'oct', $place);
$place = preg_replace('|décembre|i', 'dec', $place);
}
else
{
	echo "Wrong Format\n";
    exit();
}
//echo "place=".$place."\n";
//print_r($date);
//$str = implode(" ", $date);
//echo $str."\n";
$time = strtotime($place);
$date[0] = array_search(lcfirst($date[0]), $day);
if (date( "N", $time) != $date[0])
{
	echo "Wrong Format\n";
    exit();
}
echo $time."\n";
?>