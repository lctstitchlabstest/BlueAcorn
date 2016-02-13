<?php
include_once("./IceCreamFactory.php");

echo "  \n  PURCHASE AN ICE CREAM CONE  \n ";
$IceCreamContainer = "WAFFLECONE";
$FloatType = "FLOAT";
$SodaType = "SODA";

$Flavor1 = 1;

$Flavor2 = 2;

$Flavor6 = 6;

$IceCreamCone = IceCreamFactory::injectIngredients($IceCreamContainer);
print_r($IceCreamCone);
echo " \n \n ";
echo "  \n  PURCHASE A MILK SHAKE  \n";

$Richness = 3;
$Milk = new Lait($Richness);
$MilkShake = IceCreamFactory::injectIngredients($Milk);
print_r($MilkShake);
echo " \n \n ";

echo "  \n  PURCHASE A VANILLA FLOAT  \n";

$soda1 = new FlavorIngredient($Flavor1, $SodaType);
$Float1 = IceCreamFactory::injectIngredients($soda1);
print_r($Float1);
echo " \n \n ";


echo "  \n  PURCHASE A CHOCOLATE FLOAT  \n";

$soda2 = new FlavorIngredient($Flavor2, $SodaType);
$Float2 = IceCreamFactory::injectIngredients($soda2);
print_r($Float2);
echo " \n \n ";


echo "  \n  PURCHASE A MYSTERY FLAVOR FLOAT  \n";

$soda6 = new FlavorIngredient($Flavor6, $SodaType);
$Float6 = IceCreamFactory::injectIngredients($soda6);
print_r($Float6);
echo " \n \n ";

