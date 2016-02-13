<?php
require_once("./IceCreamConfectionary.php");

Class IceCreamFloat extends IceCreamConfectionary  {
  //use Soda;
  private $soda_object;
  //  const SODA = 4;
	//const FLOATVESSEL = self::FOUNTAINGLASS;
  const FLOATPRICE = 6.95;  
  const FLOATDISCOUNT = 0.00;  
	
  public function __construct(&$ice_cream_object, $soda_object)  {
	  $this->setIceCreamIngredient($ice_cream_object);
	  $this->setSodaIngredient($soda_object);
	  $this->setVessel(IceCreamConstants::$FOUNTAINGLASS);
	  $this->setPrice(self::FLOATPRICE);
	  $this->setDiscount(self::FLOATDISCOUNT);
  }	

  public function setSodaIngredient($flavor_ingredient_object) {
	if($flavor_ingredient_object instanceof FlavorIngredient) {
	    $this->soda_object = $flavor_ingredient_object;
      }
	  else {
	    die(" \n Failed to create Float Object.  FlavorIngredient Object Invalidly Specified: " . $flavor_ingredient_object . " \n ");   
      }
  }	  
}
