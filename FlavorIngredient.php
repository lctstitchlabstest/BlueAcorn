<?php
require_once("./Ingredient.php");
require_once("./IceCreamConstants.php");

//namespace FlavorIngredients {

	Class FlavorIngredient extends Ingredient\Ingredient  {
/*****  

 ****/
      use IceCreamConstants;
	  private $flavor;
	  private $food_type;
	  
	  public function __construct($flavor, $food_type) {
		  $this->setFlavor($flavor);
		  $this->setFoodType($food_type);
	  }

	  public function setFlavor($flavor) {
		  
		  $this->flavor = self::$flavors[$flavor];
	  }

	  public function getFlavor() {
		  
		  return $this->flavor;
	  }

	  public function setFoodType($food_type) {
		  
		  $this->food_type = $food_type;
	  }

	  public function getFoodType() {
		  
		  return $this->food_type;
	  }

	}
		
//}
