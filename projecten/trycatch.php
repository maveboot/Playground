<?php 

try{
    $number = 9;
    
    if(!($number > 10)){
        throw new Exception("$number is not bigger than 10!");
    }else{
        throw RDfout("$number is bigger than 10!");
    }
    
}catch(Exception $e){
    
    echo $e->getMessage();
}

catch(RDfout $e){
    
    echo $e->getMessage();
}

?>