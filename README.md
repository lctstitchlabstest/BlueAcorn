# BlueAcorn
Ice Cream Store

Imagine that you run an ice cream shop. You sell three different main items – ice cream cones, milkshakes, and floats. You have a large number of different flavors of ice cream available.

Ice cream cones can be made of either one or two scoops, and each scoop can be any available flavor. The cone can be only one of the available waffle cones. Milkshakes can only be made with one flavor of ice cream, and must be made with either skim, whole, or 2% milk. Floats can be made with any number of scoops of any number of different flavors, plus one available soda.

Finally, your store offers discounts, but only on milkshakes and floats and not on ice cream cones. Utilizing Object Oriented Programming, design and build a system that will store the listed information. Your submitted solution should contain not only the source code for the classes you have created, but also contain example usage of these classes. Please do not utilize pre-built frameworks.

You must:
- create at least one of each of your product types (ice cream cone, milkshake, float)
- purchase at least one item with a discount
- use at least 5 different flavors of ice cream
- use at least two different serving vessels(waffle cone, cup, etc).
- use at least 3 different flavors of soda

Here are some answers to questions some have asked:

I assume that PHP is the preferred language for this OOP exercise?
Yes, PHP is preferred but any language can be used. Please no frameworks.

Should the storage of information be performed in a MySQL or other database, or do
you mean that the information should just be stored in the objects I create for this project?
The objects can store the information, although you could use a mysql database.

Should the solution be completed with an HTML web form for ordering?
It is not required, but can be used if you prefer.

When submitting examples of usage, do you also mean
screenshots or simply applications I write which utilize the objects I create?
We would like to see the applications, not screenshots.

Do you also need to see class diagrams or other UML type diagrams?
Not unless you prefer to send those.





FROM LOUIS TAYLOR;

OK, I just finished and am attaching the files for the application including an IceCreamShop SQL file to create the table structure that I would use.
Unfortunately the application does not interact with it but that could certainly be added in a later version.  This version is run on the command line.  

>php IceCreamFountain.php

This driver script creates one Ice Cream Cone, One Milk Shake (at a discount) and three different Floats.

The way that the driver runs the Milk richness for the milkshake and the Soda flavors for the 3 floats are pre-specified by default in the driver script.
I have 6 Ice Cream flavors pre-specified.   You can check the IceCreamConstants trait to find out what they are but only after you have your Ice cream.. 
(NO PEEKING :P )

For each Ice Cream confection the command prompt will ask you for a flavor for each scoop.  The milk shake will only ask you for one.
Please enter an integer corresponding with one of the available flavors  1 - 6  (Again, NO PEEKING!)
These numbers are not currently checked unfortunately so you can enter others
Each Product has a scoop limit:
Ice cream cones = 2
Milk Shakes = 3
Floats = 5
You cannot just order a float and order all of the ice cream in the store unfortunately..
To end the scoops iterator before the limit is reached you enter the word     abort


For this version I have made it so that all of the Floats and Milk Shakes are served in Fountain Glasses because that is how it works at real Ice Cream parlors.  You have a choice between having your ice cream served in a cup and a waffle cone.  This is how it works at the ice cream places that I go to.  I hope this is OK.

For the discount, I have a value specified in a Price Trait that will automatically recalculate the price of the confection.

I also have the price of the Ice cream cone calculated based upon how many scoops are ordered just like in a regular ice cream parlor  (I don't do this for the floats though)

The object for each confection is echoed out so you can see the values of everything and how everything is put together in the IceCreamConfection object (
Ice Cream Cone), The MilkShake object, and the Float object.

I uploaded the files here to my GitHub account as well:


Please let me know if you have any questions.
 
