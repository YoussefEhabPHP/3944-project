<?php
declare(strict_types=1);

//Vehicles
require_once 'vehicles/Car.php';
require_once 'vehicles/Motorcycle.php';
require_once 'vehicles/Bus.php';
require_once 'vehicles/Truck.php';

//Recipy
require_once 'recipes/Pizza.php';
require_once 'recipes/Burger.php';
require_once 'recipes/Sandwich.php';
require_once 'recipes/IceCream.php';

echo '         Vehicle SYSTEM TESTING           <br>';
echo '--- Testing Car ---<br>';
Car::showName();          
Car::showPrice();         
Car::startEngine();       
Car::showNumberOfDoors();
Car::showFuelType();     

echo '--- Testing Motorcycle ---<br>';
Motorcycle::showPaymentPlan();   
Motorcycle::showEngineCapacity();
Motorcycle::showHasSidecar();    

echo '--- Testing Bus ---<br>';
Bus::stopEngine();             
Bus::showNumberOfPassengers();
Bus::showBusType();           

echo '--- Testing Truck ---<br>';
Truck::showName();           
Truck::showLoadCapacity();  
Truck::showNumberOfWheels();


echo '         RECIPES SYSTEM TESTING           <br>';
echo '--- Testing Pizza ---<br>';
Pizza::showName();        
Pizza::showIngredients(); 
Pizza::showPizzaSize();  
Pizza::showCrustType();  

echo '--- Testing Burger ---<br>';
Burger::showPrice();        
Burger::showBurgerType();  
Burger::showCheeseOption();

echo '--- Testing Sandwich ---<br>';
Sandwich::showName();         
Sandwich::showBreadType();   
Sandwich::showToastedStatus();

echo '--- Testing IceCream ---<br>';
IceCream::showIngredients(); 
IceCream::showFlavor();     
IceCream::showTopping();    
