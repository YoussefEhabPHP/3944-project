<?php
declare(strict_types=1);

require_once 'restaurant-system/Restaurant.php';
require_once 'restaurant-system/FoodMenu.php';
require_once 'restaurant-system/Order.php';

// 1. Restaurant Tests
Restaurant::showRestaurantInfo();
echo "Name -> " . Restaurant::RESTAURANT_NAME . " | Currency -> " . Restaurant::CURRENCY . "<br>";
echo "Current Secret Code: " . Restaurant::getSecretCode() . "<br>";

echo "Attempting valid secret code update:<br>";
Restaurant::setSecretCode("NewSuperSecretCode2026");
echo "Updated Secret Code Check: " . Restaurant::getSecretCode() . "<br>";

echo "Attempting invalid secret code update:<br>";
Restaurant::setSecretCode("");
echo "Check after invalid overwrite attempt: " . Restaurant::getSecretCode() . "<br>";
echo "--------------------------------------------------<br>";

// 2. Food Menu Tests
echo "Menu Version: " . FoodMenu::MENU_VERSION . "<br>";
FoodMenu::showFoodInfo();
echo "Current Preparation Cost: " . FoodMenu::getPreparationCost() . " " . FoodMenu::CURRENCY . "<br>";

echo "Attempting valid preparation cost update:<br>";
FoodMenu::setPreparationCost(12.75);

echo "Attempting negative preparation cost update:<br>";
FoodMenu::setPreparationCost(-5.00);

echo "Attempting valid food price update:<br>";
FoodMenu::setFoodPrice(30.00);

echo "Attempting invalid (zero) food price update:<br>";
FoodMenu::setFoodPrice(0.00);

echo "Calculating Final Price with tax:<br>";
FoodMenu::showFinalPrice();
echo "--------------------------------------------------<br>";

// 3. Order Tests
echo "Minimum Order Allowed: " . Order::MINIMUM_ORDER . " " . Order::CURRENCY . "<br>";
Order::showOrderInfo();

echo "Attempting valid quantity update:<br>";
Order::setQuantity(4);

echo "Attempting invalid quantity update:<br>";
Order::setQuantity(-2);

echo "Attempting valid delivery fee update:<br>";
Order::setDeliveryFee(7.50);

echo "Attempting invalid delivery fee update:<br>";
Order::setDeliveryFee(-1.00);

echo "<br>";
Order::calculateTotal();