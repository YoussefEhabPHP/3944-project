<?php
declare (strict_types=1);
require_once 'Recipes/IceCream.php';
require_once 'Recipes/Sandwich.php';
require_once 'Recipes/Burger.php';
require_once 'Recipes/Pizza.php';

IceCream:: showName();
IceCream:: showPrice();
IceCream:: showIngredients();


Sandwich:: showName();
Sandwich:: showPrice();
Sandwich:: showIngredients();


Burger:: showName();
Burger:: showPrice();
Burger:: showIngredients();

Pizza:: showName();
Pizza:: showPrice();
Pizza:: showIngredients();