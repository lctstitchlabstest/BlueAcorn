<?sql

CREATE TABLE IF NOT EXISTS Flavor(
  FId  INT(11) UNSIGNED AUTO_INCREMENT NOT NULL,      
  FlavorName   VARCHAR(35) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,     
  PRIMARY KEY ( FId )
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci; 
  
CREATE TABLE IF NOT EXISTS Product (
  PId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  ProductType VARCHAR( 35 ) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,     
  PRIMARY KEY ( PId )
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   


CREATE TABLE IF NOT EXISTS Pricing (
  PXId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  ProductId  int(8) UNSIGNED NOT NULL,      
  csPrice  double(12,2) DEFAULT NULL,     
  Discount BOOLEAN NOT NULL DEFAULT false,  /*  Indicates whether the price is a discount or not  */
  PRIMARY KEY ( PXId ),
  UNIQUE KEY (ProductId, csPrice),
  FOREIGN KEY (ProductId) REFERENCES Product(PId)
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   


CREATE TABLE IF NOT EXISTS Vessel(
  VId  INT(11) UNSIGNED AUTO_INCREMENT NOT NULL,      
  VesselName   VARCHAR(35) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,         /* Waffle Cone, Cup, Foountain Glass  */
  PRIMARY KEY ( VId )
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci; 



CREATE TABLE IF NOT EXISTS Ingredient (
  IId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  IngredientType VARCHAR( 35 ) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,       /*  Milk, Soda, Ice Cream  */
  PRIMARY KEY ( IId )
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   




CREATE TABLE IF NOT EXISTS FlavorIngredient (     /*  A link table between Flavor and Ingredient  */
  FIId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  IngredientId  int(8) UNSIGNED NOT NULL,      
  FlavorId  int(11) UNSIGNED NOT NULL,      
  PRIMARY KEY ( FIId ),
  UNIQUE KEY (IngredientId, FlavorId),
  FOREIGN KEY (IngredientId) REFERENCES Ingredient(IId),
  FOREIGN KEY (FlavorId) REFERENCES Flavor(FId)
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   




CREATE TABLE IF NOT EXISTS IceCreamConfection (
  ICCId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  solventIngredientID  int(8) UNSIGNED NOT NULL,      
  VesselId  int(11) UNSIGNED NOT NULL,      
  MaxScoops INT(3) UNSIGNED NOT NULL,     
  PRIMARY KEY ( ICCId ),
  FOREIGN KEY (solventIngredientID) REFERENCES Product(PId),
  FOREIGN KEY (VesselId) REFERENCES Vessel(VId)
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   




CREATE TABLE IF NOT EXISTS ConfectionCreation (     /*  Another link table between IceCreamConfection and FlavorIngredient  */
  CCId  int(8) UNSIGNED NOT NULL,      /*  Non Unique   The creation is specified across multiple records  */
  IceCreamConfectionId  int(8) UNSIGNED NOT NULL,      
  FlavorIngredientId  int(8) UNSIGNED NOT NULL,      
  PRIMARY KEY (IceCreamConfectionId, FlavorIngredientId),
  FOREIGN KEY (IceCreamConfectionId) REFERENCES IceCreamConfection(ICCId),
  FOREIGN KEY (FlavorIngredientId) REFERENCES FlavorIngredient(FIId)
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   


CREATE TABLE IF NOT EXISTS Purchase (
  PURId  int(8) UNSIGNED AUTO_INCREMENT NOT NULL,      
  ConfectionCreationID  int(8) UNSIGNED NOT NULL, /*  References CCId in the ConfectionCreation table but cannot be a foreign key because those values are non-unique */
  Cost double(12,2) DEFAULT NULL,     
  PRIMARY KEY ( PURId )
 /* FOREIGN KEY (ConfectionCreationID) REFERENCES ConfectionCreation(CCId) */
  )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_swedish_ci;   
