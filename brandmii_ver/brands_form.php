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
  
  $(document).ready(function() {

//  ====================== LOAD & REMOVE BRANDS ======================== //

      $.getJSON("jason2.php", function(data) {
         
      var merkTag = "";
      
      
       $.each(data, function(){
        
        merkTag += " <a class=\"deletemerk\" href="+"http://localhost/brandmii/verwijder_merk.php?id="+this.pkFavorietemerken+">" + this.merken + "</a>";
        
     
        
        });
       
         //only call the append once
         $("#selected-brands").append(merkTag);
         
         
         $("a").click(function ( event ) {
           event.preventDefault();
           $(this).hide();
           
           var linkje = $(this).attr("href");
           
           $.get(linkje);
           
         });
         
         
             
      }); 

//  ====================== LOAD & REMOVE BRANDS ======================== //


//  ====================== ADD BRANDS ======================== //

    //  $.getJSON("merkenlijst.php", function(jsondata) {
	 
	 var nieuweding ="";
	 
	 $.each(jsondata, function(){
	    
	    nieuweding +=  " "+this.merk+",";
	    
	    });

	  alert(nieuweding);

	 $("input#autocomplete").autocomplete({minLength: 2 });
      
	 $("input#autocomplete").autocomplete({
	   
	  
	 
	 source: ["Adidas", "Airforce", "Alpha Industries", "Asics", "Bikkemberg", "Birkenstock", "Bjorn Borg", "Brunotti", "Calvin Klein", "Cars Jeans", "Chanel","Chasin", "Diesel", "Dior", "DKNY", "Dolce & Gabbana"]
	 
	 });
       
	$("#add-brand").click(function(){
	 
	    var merk  = $("#autocomplete").val();
	    
	    $("#selected-brands").append(" <a class=\"deletemerk\" href=\"#\">"+ merk+ "</a>" );
	    
	    return false;
	
	});
	
    //  });
    
  });
  
//  ====================== ADD BRANDS ======================== //

  </script>
   <style type="text/css">
   
        body{    margin: 0 auto; width: 540px; }
   
   </style>
   <title>Form add brands </title>
</head>
<body>

    					<div id="brands-form-holder">
						<form id="brands-form" action="" method="">
							<dl>
								<dt><h1><label for="brands-form-brand">Add your brands</label></h1></dt>
								<dd>Search for brand:
									<input id="autocomplete" type="text" name="brand" />

									<input id="add-brand" type="button" value="Add brands" />
							
								</dd>
							</dl>
						</form>
                                                <hr />
						
						<p class="section-title"><strong>Brands selected</strong>  (including from the database)</p>
						
						
						<div id="selected-brands">
						

						</div>
						
						
					
					</div>
</body>
</html>