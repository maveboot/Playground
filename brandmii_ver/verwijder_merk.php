<?php
$server		= "localhost";
$gebruikernaam	= "root";
$wachtwoord     = "";
$dbnaam		= "brandmii";

//$emailadres = $_SESSION["emailadres"];

$servconn	= mysql_connect($server,$gebruikernaam,$wachtwoord) or die ("Verbinding met de SERVER is mislukt!");

$dbconn		= mysql_select_db($dbnaam,$servconn) or die ("Verbinding met de DATABASE is mislukt!");

$emailadres = "something@hotmail.com";


$merk_id    =  $_GET["id"];

$vraag_bedrijfs_id	= "DELETE FROM favorietemerken WHERE pkFavorietemerken='$merk_id' ";

$pak_id		= mysql_query($vraag_bedrijfs_id) or die("Geen bedrijfs_id");



/*
while($regel = mysql_fetch_assoc($pak_id)){

	$neem_id = $regel["pkBedrijvenID"];

}

$merken_lijst = "SELECT favorietemerken.pkFavorietemerken, favorietemerken.merken FROM favorietemerken JOIN bedrijven ON bedrijven.pkBedrijvenID=favorietemerken.fkBedrijvenID WHERE favorietemerken.fkBedrijvenID=$neem_id";


$rows = array();
$sth = mysql_query($merken_lijst);
while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);

*/

?>
