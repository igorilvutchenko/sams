<?php 

$fullName = '   Ivanov  Ivan    Ivanovich   ';
$fullName = trim($fullName);

$fullName = preg_replace('/[^\S\r\n]+/', ' ', $fullName); 

$arrayFullName = explode(" ", $fullName);

$surname = $arrayFullName[0];

if(!empty($arrayFullName[1]))
$firstName = substr($arrayFullName[1], 0, 1). ". ";

if(!empty($arrayFullName[2]))
$secondName = substr($arrayFullName[2], 0, 1). ".";

$finalName = $surname . " " . $firstName . " " . $secondName;

echo $finalName;

?>