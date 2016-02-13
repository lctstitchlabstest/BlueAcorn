<?php

trait Price   
{
   
   protected $Price;
   protected $Discount;  
   

  public function setPrice($price) {
	  
	  $this->Price = $price + 0;
  }

  public function getPrice() {
	  
	  return $this->Price;
  }

  public function setDiscount($discount) {
	  
	  $this->Discount = $discount;
	  $this->Price = $this->Price - $this->Price * $this->Discount;
  }

  public function getDiscount() {
	  
	  return $this->Discount;
  }
}
