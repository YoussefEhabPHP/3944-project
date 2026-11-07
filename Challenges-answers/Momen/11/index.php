<?php
require_once 'restaurant.php';
require_once 'food_menu.php';
require_once 'order.php';


// Restaurant::showRestaurantInfo();
// echo Restaurant::Restaurant_Name ."<br>";
// Restaurant::getSecretCode();
// Restaurant::setSecretCode(1234);
// Restaurant::setSecretCode();


// echo FoodMenu::MENU_VERSION ."<br>";
// FoodMenu::showFoodInfo();
// echo FoodMenu::getPreparationCost()."<br>";
// FoodMenu::setPreparationCost(12);
// // FoodMenu::setPreparationCost(-12);
// FoodMenu::setFoodPrice(18);
// // FoodMenu::setFoodPrice(-18);
// FoodMenu::showFinalPrice();


echo Order::MINIMUM_ORDER . "<br>";
Order::showOrderInfo();
Order::setQuantity(2);
// Order::setQuantity(0);
echo Order::getDeliveryFee(). "<br>";
Order::setDeliveryFee(0.11);
// Order::setDeliveryFee(-0.11);
echo Order::calculateTotal();
