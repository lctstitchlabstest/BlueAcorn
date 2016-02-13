<?php
require_once("./Price.php");

trait Product   
{
   //use Ingredient\Ingredient\FlavorIngredient; // in this case this is OK since all of the products use Ice Cream to some extent
   use Price;
	   
   protected $SKU;
   protected $vessel;  //  Please note:  when container sizes and flavors become an issue this needs to turn into an object of a separate class

  public function setID($id) {
	  
	  $this->SKU = $id + 0;
  }

  public function getID() {
	  
	  return $this->SKU;
  }

  public function setVessel($vessel) {
	  
	  $this->vessel = $vessel;
  }

  public function getVessel() {
	  
	  return $this->vessel;
  }
}
