<?php
require_once("./Product.php");
require_once("./FlavorIngredient.php");

Class IceCreamConfectionary extends FlavorIngredient   
{	
/*************  Didn't want to do this, unfortunately, PHP's limits with creating and using Traits and Namespaces has forced me
**************  I had to get rid of an abstract Products class that should be between This class and the FlavorIngredient class
**************   That's right, I'm Extending an ingredient for a product and using a products trait instead of vice verse..
**************   I would make Ingredient\FlavorIngredient both traits and use FlavorIngredient and extend Product but I have to 
**************   instantiate ice cream and soda objects from FlavorIngrediant and you can't do that off of a Trait directly
**************   I Could create a FlavorIngredient class that uses the FlavorIngredient Trait but that's more redundant than this
**************   approach.. But, Hey!  It's an Ice Cream SPECIFIC Product at least!                            F***ing PHP   >.>
************/
  use Product;
  protected $scoops;
  private $ice_cream_object_array;  
  const ICECREAMSCOOPPRICE = 1.95;  
  //private $milk;
//private $ice_cream_confectionary_object;  
	
  public function __construct(&$ice_cream_object, $co_ingredient)  {
	  $this->setIceCreamIngredient($ice_cream_object);
	  $this->setVessel($co_ingredient);
	  $this->setScoops();
	  $price = self::ICECREAMSCOOPPRICE * $this->getScoops();
	  $this->setPrice($price);
  }	


  public function setScoops() {
	  
	  $this->scoops = count($this->ice_cream_object_array);
  }

  public function getScoops() {
	  
	  return $this->scoops;
  }
  
   public function setIceCreamIngredient($flavor_ingredient_object_array) {
	if(is_array($flavor_ingredient_object_array)) {
	   foreach($flavor_ingredient_object_array as $flavor_ingredient_object) {
   		 //$shape_id = array_shift($args);
		 if($flavor_ingredient_object instanceof FlavorIngredient) {
		  $this->ice_cream_object_array[] = $flavor_ingredient_object;
		  } 
		//  else {
			//die(" \n Failed to create Float Object.  FlavorIngredient Object Invalidly Specified: " . $flavor_ingredient_object . " \n ");   
		  //}
	   }
	}
  }

}
