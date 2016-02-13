<?php
//namespace Ingredient\Milk;
require_once("./Ingredient.php");

	class Lait extends Ingredient\Ingredient  {  //  may not be able to extend ingredient

	 //  const SKIM = 1;
	 //  const TWOPERCENT = 2;
	 //  const WHOLE = 3;
   
	  private $richness;

	  public function __construct($richness) {
		  $this->setRichness($richness);
	  }

	  public function setRichness($richness) {
		  
		  $this->richness = $richness + 0;
	  }

	  public function getRichness() {
		  
		  return $this->richness;
	  }
  }
