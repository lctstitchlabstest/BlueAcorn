<?php
trait IceCreamConstants  {
	// IM INCLUDING THSE ARE VALUES I WOULD GET FROM THE DATABASE,  I WILL NOT MAKE THE FACTORY AN EXTENSION OF THE ICE CREAM CONFECTIONARY JUST FOR THIS

   public static $WAFFLECONE = "WAFFLECONE";
   public static $CUP = "CUP";
   public static $FOUNTAINGLASS = "FOUNTAINGLASS";
	   
   public static $SODATYPE = "SODA";
   public static $FLOATTYPE = "FLOAT";
   public static $MILKSHAKETYPE = "MILKSHAKE";
   public static $ICECREAMTYPE = "ICECREAM";
	   
   public static $FLOATLIMIT = 5;
   public static $MILKSHAKELIMIT = 3;
   public static $ICECREAMCONELIMIT = 2;
   
   public static $flavors = array(
                              1 => 'VANILLA',
                              2 => 'CHOCOLATE',
                              3 => 'STRAWBERRY',
                              4 => 'MINTCHIP',
                              5 => 'LEMONCUSTARD',
                              6 => 'DICKLEWHIPPLE'
                                );


	   public static $SKIM = 1;
	   public static $TWOPERCENT = 2;
	   public static $WHOLE = 3;
   
   }
