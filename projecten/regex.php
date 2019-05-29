<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
   <title>magic</title>
</head>
<body>
<?php
   
   $content = file_get_contents("http://www.emerce.nl");
   
   //preg_match_all("/<p>([^<]+)<\/p>/",$content,$matches);
   //<img\s.*\sclass="attachment-post-thumbnail wp-post-image".*/>
   //preg_match_all("/<img\s.*\/>/",$content,$matches);
   //preg_match_all("/<img\s.*\sclass=\"attachment-post-thumbnail wp-post-image\".*\/>/",$content,$matches);
   preg_match_all("/<p>([^<]+)<\/p>|<img\s.*\sclass=\"attachment-post-thumbnail wp-post-image\".*\/>/",$content,$matches);
   //print_r($matches);
   
   foreach($matches[0] as $m){
      echo $m."<br />";
   }
   
   //echo $matches[0][3];
   
   $pass1 = "hallo";
   $pass2 = "hallo2";
   
   if(strcmp($pass1,$pass2) != 0){
      echo "ze matchen niet ";
   }
   
?>
</body>
</html>