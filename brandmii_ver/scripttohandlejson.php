<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="beschrijving van de webpagina" />
   <meta name="keywords" content="trefwoorden, gescheiden, door, komma's" />
   <title>Script to handle JSON</title>
</head>
<body>
<?php
$server		= "localhost";
$gebruikernaam	= "root";           
$wachtwoord     = "";
$dbnaam		= "brandmii";

$servconn	= mysql_connect($server,$gebruikernaam,$wachtwoord) or die ("Verbinding met de SERVER is mislukt!");

$dbconn		= mysql_select_db($dbnaam,$servconn) or die ("Verbinding met de DATABASE is mislukt!");

/*
     $getcontent = json_decode($json, true);

     $data_s = mysql_escape_string($getcontent->{'Brand'});


$arr_content = json_decode($json, true);

$brand = $arr_content["Brand"];

*/

 $brand= $_POST['Brand'];

$vraag = "INSERT INTO kijken (merk) VALUES ('$brand')";



  //   $vraag = "INSERT INTO kijken (merk) VALUES ('$getcontent')";

     $voerin = mysql_query($vraag) or die("couldnt put into db");



?>
</body>
</html>
