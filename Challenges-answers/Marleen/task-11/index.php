<?php
declare (strict_types=1);
require_once 'challenge-1/helpers/dump.php';

require_once 'challenge-1/Restaurant/Restaurant.php';
require_once 'challenge-1/Restaurant/FoodMenu.php';
require_once 'challenge-1/Restaurant/Order.php';
echo Restaurant::showRestaurantInfo();
echo '<br>------------------<br>';
echo Restaurant:: RESTAURANT_NAME;
echo '<br>------------------<br>';
echo Restaurant:: CURRENCY;
echo '<br>------------------<br>';
echo FoodMenu:: getPreparationCost();
echo '<br>------------------<br>';
 FoodMenu:: setPreparationCost(70);
echo FoodMenu:: getPreparationCost();
echo '<br>------------------<br>';
echo FoodMenu:: MENU_VERSION;
echo '<br>------------------<br>';
echo FoodMenu::showFoodInfo();
echo '<br>------------------<br>';

echo '<br>------------------<br>';

echo Restaurant:: getSecretCode();
echo '<br>------------------<br>';
 
echo '<br>------------------<br>';

Restaurant:: setSecretCode('gfgfhftdrrrrrrrrrr');
echo Restaurant:: getSecretCode();
echo '<br>------------------<br>';
echo FoodMenu:: showFinalPrice();

echo '<br>------------------<br>';

echo FoodMenu:: getFoodPrice();
echo '<br>------------------<br>';
FoodMenu:: setFoodPrice(300);
echo FoodMenu:: getFoodPrice();
echo '<br>------------------<br>';
echo Order:: calculateTotal();