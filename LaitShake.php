<?php
require_once("./IceCreamConfectionary.php");
require_once("./Lait.php");

Class MilkShake extends IceCreamConfectionary  {
  //use Ingredient\Ingredient\Milk;   
  const MILKSHAKEPRICE = 4.95;  
  const MILKSHAKEDISCOUNT = 0.35;  
  private $milk_object;
//private $ice_cream_confectionary_object;  
	
  public function __construct(&$ice_cream_object, $soda_object)  {
	  $this->setIceCreamIngredient($ice_cream_object);
	  $this->setMilkIngredient($soda_object);
	  $this->setVessel(IceCreamConstants::$FOUNTAINGLASS);
	  $this->setPrice(self::MILKSHAKEPRICE);
	  $this->setDiscount(self::MILKSHAKEDISCOUNT);
  }	

  public function setMilkIngredient($milk_object) {
    if($milk_object instanceof Lait)	  
	  $this->milk_object = $milk_object;
  }

}
