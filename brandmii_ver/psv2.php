<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="beschrijving van de webpagina" />
   <meta name="keywords" content="trefwoorden, gescheiden, door, komma's" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
   <script>

  $(document).ready(function(){
   
      $.getJSON("jason2.php", function(data) {
         
      var merkTag = "";
      
      
       $.each(data, function(){
        
        merkTag += " <a class=\"deletemerk\" href="+"http://localhost/brandmii/verwijder_merk.php?id="+this.pkFavorietemerken+">" + this.merken + "</a>";
        
     
        
        });
       
         //only call the append once
         $("#ontvangenjson").append(merkTag);
         
         
         $("a").click(function ( event ) {
           event.preventDefault();
           $(this).hide();
           
           var linkje = $(this).attr("href");
           
           $.get(linkje);
           
         });
         
         
             
      }); 
   
   
   });
  
  </script>

<style type="text/css">
   
        body{    margin: 0 auto; width: 540px; }
   
</style>
   
<title>PSV 2</title>
</head>
<body>


<h1><label for="brands-form-brand">Get JSON data</label> <input type="button" id="knop" value="get JSON" /></h1>

<hr />

<p class="section-title"><strong>JSON Data received</strong></p>


<div id="ontvangenjson">  </div> 

</body>
</html>