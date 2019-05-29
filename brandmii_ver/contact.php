<?php session_start();?>
<?php include("mysql_connect.php"); include("links.php");?>
<?php if(isset($_SESSION["emailadres"])){ 
//check if the starting row variable was passed in the URL or not
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  $startrow = 0;
//otherwise we take the value from the URL
} else {
  $startrow = (int)$_GET['startrow'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
<style type="text/css">

a { color:#0000EE;}

html{
		margin:0;
		padding:0;
		}

body{


		width:993px;
		background-color: #FFFFFF;
		color: #333333;
		font-family: arial,helvetica,sans-serif;
		font-size: 12px;
		
		}
		
#header_bar{width:980px; height:90px;}
                
#logo{width:490px; float:left;}
	
#menu li a {text-decoration:none; }
	#menu li {display:inline; list-style-type: none; padding-right: 20px;}
			
	/* #kortingbox{ margin: 0 auto; width:700px;} */
	
	.kortingcolom{
	
			border: 1px dotted #CCCCCC;
			display: inline-block;
			margin-top: 10px;
			min-height: 110px;
			width: 648px;
	
	}
	
	#titelKorting{text-align:center;}
	


</style>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="beschrijving van de webpagina" />
   <meta name="keywords" content="trefwoorden, gescheiden, door, komma's" />
   <title>BrandMii | Aanmelden</title>
</head>
<body>

	<div id="header_bar">
	
            <div id="logo">
                <span>
                    <font size="5"><strong>BrandMii</strong></font><br />
                    Al jouw favoriete merken op &#233;&#233;n plek!
                </span>
            </div>
            	

	</div>
		
	<hr />
        <br />
	

<!-- HOOFD MENU CMS -->
<?php
include("hoofd_menu_CMS.php");
?>
  
  <hr />
	<!-- <h1 id="titelKorting">Contact</h1> -->
     
	 <div id="kortingbox">
	 
		<h3>Neem contact op:</h3>
		
		<form>
		<table>
		<tr><td>Naam *</td><td><input name="" type="text" size="30" /></td></tr>
		<tr><td>Email-adres *</td><td><input name="" type="text" size="30"/></td></tr>
		<tr><td>Onderwerp *</td><td><select>
							<option></option>
							<option>Algemeen</option>
							<option>Adverteren</option>
							<option>Vraag</option>
							<option>Overige</option>
						</select></td></tr>
		<tr><td>Bericht *</td><td><textarea cols="30" rows="20"></textarea></td></tr>
		<tr><td></td><td></td><td><input name="Verzenden" type="submit" value="Verzenden >>" /></td></tr>
		</table>
		</form>
		
		<p>Velden met een * zijn verplicht</p>
	 
	 </div>
<p>

<a href="<?php echo $logout_pagina; ?>">Logout</a><br />
</p>
<?php

}else{
     
     echo"Je bent niet ingelogd.";
     
    }
?>
</body>
</html>