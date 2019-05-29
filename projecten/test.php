<?php

//function __autoload($className){
//    
//    require_once("classes/$className.class.php");
//    
//}
//
//$nieuwe_bak = new Cars();
//
//$data = array(  array("name"=>"Super Kite", 	"price"=>20,	"quantity"=>2),
//		array("name"=>"Turbo Flyer", 	"price"=>40, 	"quantity"=>5),
//		array("name"=>"Giga Trasch", 	"price"=>180, 	"quantity"=>1),
//		array("name"=>"Bare Bone Kit", 	"price"=>50, 	"quantity"=>3),
//		array("Nitty Gritty", 	"price"=>20, 	"quantity"=>10),
//		array("name"=>"Pretty Dark Flyer","price"=>75, 	"quantity"=>1),
//		array("name"=>"Free Gift", 	"price"=>0, 	"quantity"=>1)
//	    );
//
//echo $data[4][0];

class Employee {

    private $name;
    
    function __construct($name){
        echo "Dit is de Employee Class<br />";
        $this->setName($name);
    }
    
    function setName($name){
        if($name == "") echo "Name cammpt be blank!";
        else $this->name = $name;
    }
    
    function getName(){
        return "My name is ".$this->name."<br />";
    }
    
    
} //end Employee class

class Executive extends Employee{
    
    function __construct(){
        Employee:: __construct("Hans"); 
        echo "Dit is een Executive Class<br />";    
    }
    
    function pillageCompany(){
        echo "I'm selling company assets to finance my yacht!";    
    }
    
    
} //end Executive class


class CEO extends Executive{
    
    
    //function __construct(){
    //
    //       echo "Dit is een CEO Class <br />";
    //       
    //}
    function getFacelift(){
        echo "nip nip tuck tuck";
    }
    
}//end CEO class

$ceo = new CEO("RD de hustler");
echo "<br />".$ceo->getName();

?>