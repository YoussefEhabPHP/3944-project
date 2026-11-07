<?php

require_once 'recipy.php';
require_once 'burger.php';
require_once 'icecream.php';
require_once 'pizza.php';
require_once 'sandwich.php';

Recipy::showIngredients();
Burger::showBurgerType();
Icecream::showFlavor();
Pizza::showPizzaSize();
Sandwich::showBreadType();
