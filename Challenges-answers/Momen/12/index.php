<?php

require_once 'App/Code/List.php';
require_once 'App/Code/Menu.php';
require_once 'App/Code/Table.php';
require_once 'App/Restaurant/Table.php';
require_once 'App/Restaurant/Order.php';
require_once 'App/Restaurant/Menu.php';
require_once 'App/Restaurant/Food.php';


use App\Code\{
    Lista,
    Menu as CodeMenu,
    Table as CodeTable,
};

use App\Restaurant\{
    Food,
    Menu as RestaurantMenu,
    Order,
    Table as RestaurantTable,
};


RestaurantMenu::init();
CodeMenu::init();
CodeTable::init();
RestaurantTable::init();