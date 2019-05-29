<?php session_start();?>
<?php include("mysql_connect.php"); include("links.php");?>
<?php if(isset($_SESSION["emailadres"])){?>
<?php

$emailadres = $_SESSION["emailadres"];

$vraag_bedrijfs_id	= "SELECT pkBedrijvenID FROM bedrijven WHERE emailadres='$emailadres' ";

$pak_id		= mysql_query($vraag_bedrijfs_id) or die("Geen bedrijfs_id");

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


}else{
     
     echo"Je bent niet ingelogd.";
    }
?>


