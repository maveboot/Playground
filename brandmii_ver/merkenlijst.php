<?php /*session_start();?>
<?php include("mysql_connect.php"); include("links.php");?>
<?php if(isset($_SESSION["emailadres"])){?>
<?php */

$server		= "localhost";
$gebruikernaam	= "root";
$wachtwoord     = "";
$dbnaam		= "test_brandmii";

$servconn	= mysql_connect($server,$gebruikernaam,$wachtwoord) or die ("Verbinding met de SERVER is mislukt!");

$dbconn		= mysql_select_db($dbnaam,$servconn) or die ("Verbinding met de DATABASE is mislukt!");

$emailadres = "something@yahoo.com";

$vraag_bedrijfs_id	= "SELECT pkBedrijvenID FROM bedrijven WHERE emailadres='$emailadres' ";

$pak_id		= mysql_query($vraag_bedrijfs_id) or die("Geen bedrijfs_id");

while($regel = mysql_fetch_assoc($pak_id)){

	$neem_id = $regel["pkBedrijvenID"];

}

$merken_lijst = "SELECT merk FROM merken";


$rows = array();
$sth = mysql_query($merken_lijst);
while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);


mysql_close($servconn);
?>
