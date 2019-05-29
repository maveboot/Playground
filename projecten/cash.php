<?php

$text = <<< TEKSTHIER

Ben op het punt om een startup te beginnen
in de loyaliteitsbranche 

TEKSTHIER;

//$file_handle = fopen("boomerang.txt","a+");
//
//
//fclose($file_handle);

//$links   = file("links2.txt");
//
//echo $links[4];
//foreach($links as $link){
//    echo $link."<br />";
//}

$hele_bestand = file_get_contents("links2.txt");

echo $hele_bestand;



?>