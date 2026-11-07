 <?php

    $greet = fn($name) => "Hello $name";
    echo $greet("Momen") . "<br>";


    $square = fn($num) => $num * $num;
    echo $square(5) . "<br>";


    $add = fn($num1, $num2) => $num1 + $num2;
    echo $add(5, 10) . "<br>";

    $calc_price = fn($price, $quantity) => $price * $quantity;
    echo $calc_price(10, 5) . "<br>";


    $age_checker = fn($age) => $age >= 18 ? "true" : "false";
    echo $age_checker(20) . "<br>";

    $get_full_name = fn($first_name, $last_name) => "$first_name $last_name";
    echo $get_full_name("Momen", "Badr") . "<br>";

    $calc_discount = fn($price, $discount) => $price - ($price * $discount);
    echo $calc_discount(100, 0.2) . "<br>";

    $calc_minutes = fn($hours) => $hours * 60;
    echo $calc_minutes(5) . "<br>";

    $print_info = fn($name, $age, $job) => "My name is $name, I am $age years old and I work as a $job";
    echo $print_info("Momen", 25, "Flutter Developer") . "<br>";
