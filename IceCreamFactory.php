<?PHP
include_once("./Float.php");
include_once("./LaitShake.php");


	
//The Ice Cream Confection factory.  
class IceCreamFactory {
	use Product;
    private static $scoop_limit;
 	

    //Make the confectionary that is selected.
    public static function injectIngredients($coIngredient){
	
        if($coIngredient instanceof FlavorIngredient) {
    		self::$scoop_limit = IceCreamConstants::$FLOATLIMIT;     //  may have to do Product::LIMIT
			$IceCreamObject = self::createScoops($coIngredient);
			$product = new IceCreamFloat($IceCreamObject, $coIngredient);
        }
		else if($coIngredient instanceof Lait) {
    		self::$scoop_limit = IceCreamConstants::$MILKSHAKELIMIT;
			$IceCreamObject = self::createScoops($coIngredient);
			$product = new MilkShake($IceCreamObject, $coIngredient);
        }
		else {
    		self::$scoop_limit = IceCreamConstants::$ICECREAMCONELIMIT;
			$IceCreamObject = self::createScoops($coIngredient);
			$product = new IceCreamConfectionary($IceCreamObject, $coIngredient);
		}
		return $product;
	  }	  
   

/**
 * Adds ice cream scoops to your confection
 * depending on the solvent object passed in (or lack thereof for Ice cream cones)
 * 
*/
    public static function createScoops($coIngredient){
		$product_type = IceCreamConstants::$ICECREAMTYPE;
		//print_r($args);
		//exit();
		$scoop_count = 1;
		$handle = fopen ("php://stdin","r");

			//echo " \n EQUIVALENT \n ";
		//exit();
		echo " \n please enter the flavor of your first scoop: ";
		$flavor_id = fgets($handle);	
		while(trim($flavor_id) != 'abort') {
			$flavor_id = $flavor_id + 0;
			$scoops[] = new FlavorIngredient($flavor_id, $product_type);
			$scoop_count = $scoop_count + 1;
			/* Check if scoop limit for confection is reached */
			if($scoop_count > self::$scoop_limit) { // Check 
				break;
			}
			else if(($coIngredient instanceof Lait) === false)  {  //  Check if object passed in makes request a milkshake request
			  ///echo " \n Next Index :  " . $index . " \n ";
			  sleep(5);
	          echo " \n please enter another flavor id for your next scoop: ";
			  $flavor_id = fgets($handle);	
			}
		}

fclose($handle);

echo "\n"; 
echo "Thank you, ABORTING...\n";

echo "aborted!\n";

        return $scoops;
    }
   
}

