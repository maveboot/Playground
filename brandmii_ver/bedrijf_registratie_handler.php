<?php include("mysql_connect.php"); include("links.php");

$registreer         = $_POST["registreerknop"]; //Denk aan strip_tags te gebruiken
$bedrijfsnaam		= $_POST["bedrijfsnaam"];
$straatnaamennummer	= $_POST["straatnaamennummer"];
$postcode		= $_POST["postcode"];
$plaats			= $_POST["plaats"];
$website		= $_POST["website"];
$telefoon		= $_POST["telefoon"];
$naamcontactpersoon	= $_POST["naamcontactpersoon"];		
$emailadres		= $_POST["emailadres"];
$wachtwoord		= $_POST["wachtwoord"];
$bevestigwachtwoord	= $_POST["bevestigwachtwoord"];
$date               = date("Y-m-d");
$random             = rand(1234567,9999999);


// Als er op de registreer knop is gedrukt
if($registreer){
    
    // Als alle velden zijn gevuld
    if($bedrijfsnaam&&$straatnaamennummer&&$postcode&&$plaats&&$website&&$telefoon&&$naamcontactpersoon&&$emailadres&&$wachtwoord&&$bevestigwachtwoord){
        
        //Als Bedrijfsnaam niet bestaat
        $checkuser  = "SELECT emailadres FROM bedrijven WHERE emailadres = '$emailadres'";
        $query1 =   mysql_query($checkuser);
        $userexist  = mysql_num_rows($query1);
        
        if($userexist < 1 ){
            
        //Als email niet bestaat
        $checkemail  = "SELECT straatnaamennummer FROM bedrijven WHERE straatnaamennummer = '$straatnaamennummer'";
        $query2 =   mysql_query($checkemail);
        $emailexist  = mysql_num_rows($query2);
        
            if($emailexist < 1){
        
            // Als wachtwoord en bevestig wachtwoord gelijk zijn
            if($wachtwoord==$bevestigwachtwoord){
                
                if(strlen($wachtwoord) <= 25 && strlen($wachtwoord) >= 5){
                    
                    // Als Bedrijfsnaam minder is dan 25 en meer dan 5 is
                    if(strlen($bedrijfsnaam) <= 25 && strlen($bedrijfsnaam) >= 5){
                        
                        $query  = "INSERT INTO bedrijven (bedrijfsnaam,straatnaamennummer,postcode,plaats,website,telefoon,naamcontactpersoon,emailadres,wachtwoord,bevestigwachtwoord,random)";
                        $query .= "VALUES ('$bedrijfsnaam','$straatnaamennummer','$postcode','$plaats','$website','$telefoon','$naamcontactpersoon','$emailadres','$wachtwoord','$bevestigwachtwoord','$random')";
                        
                        $result  =   mysql_query($query) or die("Kan gegevens niet in database plaatsen");
			
			$lastid = mysql_insert_id();
						
			$emailNAAR	= $emailadres;
			$emailONDERWERP	= "Activeer jouw account";
			$emailBODY	= "Hoi $bedrijfsnaam, \n\n
					    Activeer jouw account door de link hierbeneden te klikken!
					   http://brandmii.nl/bedrijven_registratie/activeer_bedrijf.php?code=$random&id=$lastid \n\n
					    Veel shop plezier,  Brandmii Team.";
			$emailVAN	= "From: BrandMii <support@brandmii.nl>";
                        
			mail($emailNAAR,$emailONDERWERP,$emailBODY,$emailVAN);
			
			die("Welkom <strong> $bedrijfsnaam</strong>, Check jouw email om je account te activeren!");
                        
                            }else{
                        
                                die("Bedrijfsnaam: min 5. max 25 letters! Klik <a href=\"$bedrijf_registratie_pagina \">hier</a> en probeer nogmaals");
                        
                            }
                    
                    
                        }else{
                        
                            die("Wachtwoord: min 5. max 25 letters! Klik <a href=\"$bedrijf_registratie_pagina \">hier</a> en probeer nogmaals");
                        
                        }
            
   
                    }else{
                
                        die("De wachtwoorden zijn niet gelijk! Klik <a href=\"$bedrijf_registratie_pagina \">hier</a> en probeer nogmaals");
                
                    }
            
                }else{
                
                    die("Er is al een account aangemaakt met dit adres: <strong>$straatnaamennummer</strong>! Klik <a href=\"gebruiker_registratie.php\">hier</a> en probeer nogmaals");
                
                }
            
            }else{
          
            die("Emailadres bestaat al! Klik <a href=\" $bedrijf_registratie_pagina\">hier</a> en probeer nogmaals");  
            
            }
        
        }else{
            
            die("Gegevens zijn niet volledig ingevuld! Klik <a href=\" $bedrijf_registratie_pagina \">hier</a> en probeer nogmaals");
            
        }
            
}

?>