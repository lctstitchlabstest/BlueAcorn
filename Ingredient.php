<?php
namespace Ingredient;
abstract class Ingredient  {
  private $id;

  public function setID($id) {
	  
	  $this->id = $id + 0;
  }

  public function getID() {
	  
	  return $this->id;
  }

}
