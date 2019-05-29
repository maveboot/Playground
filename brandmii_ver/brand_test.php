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

    $("#autocomplete").autocomplete({
        minLength: 2
    });

    $("#autocomplete").autocomplete({

        source: ["Adidas", "Airforce", "Alpha Industries", "Asics", "Bikkemberg", "Birkenstock", "Bjorn Borg", "Brunotti", "Calvin Klein", "Cars Jeans", "Chanel", "Chasin", "Diesel", "Dior", "DKNY", "Dolce &  Gabbana"]

    });

    $("#add-brand").click(function() {

        var merk = $("#autocomplete").val();

        $("#selected-brands").append(" <a class=\"deletemerk\" href=\"#\">" + merk + "</a>");

                //Add your parameters here        
               // var param = JSON.stringify({
                //    Brand: merk
                //});
                  var param ={Brand: merk};


                $.ajax({
                    type: "POST",
                    async: true,
                    url: "scripttohandlejson.php",
                    contentType: "application/json",
                    data: param,
                    dataType: "json",
                    success: function (good){
                       //handle success
                       
                       alert(good)
                    },
                    failure: function (bad){
                       //handle any errors
                       
                       alert(bad)
                       
                    }
                });
        
            
        return false;
      
    });

});


   </script>
   <title></title>
</head>
<body>

   <div id="brands-form-holder">
     
   <form id="brands-form" action="" method="">

   <h1><label for="brands-form-brand">Add your brands</label></h1>

Search for brand:
       
       <input id="autocomplete" type="text" name="brand" />
       <input id="add-brand" type="button" value="Add brands" />
                             
   </form>
           <hr />
                         
    <p class="section-title">
       <b>Brands selected</b>  
       (including from the database)
    </p>
                                                 
   <div id="selected-brands"> </div>
                         
 </div>
   <br />
 <input id="opslaan" type="button" value="Opslaan" />
</body>
</html>