<?php 
    declare(strict_types=1);
    echo "<h2>Arrow Functions — Practice Questions</h2>";

    echo"⟡ (greet) that takes a name and prints: Hello, [name]! <br>";
    $greet=fn(string $name):string => "Hello";
    echo $greet("yossef");

    echo"<br> ⟡ (square) that takes a number and returns its square. <br>";
    $square=fn(int $num1,int $num2) => $num1* $num2;
    echo $square(2,3);
    /* $square=fn(int $num) => $num* $num; /other way to write it 
        echo $square(2);*/

    echo"<br>⟡ (add) that takes two numbers and returns their sum. <br>";
    $add=fn(int $num1,int $num2) => $num1 + $num2;
    echo $add(2, 3);

    echo"<br>⟡ (calculatePrice) that takes price and quantity and returns the total price. <br>";
    $calculatePrice=fn(int $price,int $quantity) => $price * $quantity;
    echo $calculatePrice(10, 5);

    echo"<br>⟡ (isAdult) that takes an age and returns true if the age is 18 or greater, otherwise returns - false. <br>";
    $isAdult=fn(int $age) => $age >= 18;
    echo $isAdult(2) ? "true" : "false";//Operation based on the number
    //echo (fn(int $age) => $age >= 18 ? "true" : "false")(20);

    /*echo"<br>⟡ (isEven) that takes a number and returns true if the number is even, otherwise returns - false. <br>";
    $isEven=fn(int $num) => $num % 2 === 0;
    echo $isEven(4) ? "true" : "false";*/
    
    echo"<br>⟡ (getFullName) that takes firstName and lastName and returns the full name. <br>";
    $getFullName=fn(string $firstName,string $lastName) => "$firstName $lastName";
    echo $getFullName("Youssef", "Ehab");

    echo"<br>⟡ (calculateDiscount) that takes price and discount and returns the final price after applying - the discount percentage. <br>";
    $calculateDiscount=fn(int $price,int $discount) => $price - ($price * ($discount / 100));
    echo $calculateDiscount(100, 20);

    echo"<br>⟡ (convertToMinutes) that takes a number of hours and returns the equivalent number of minutes. <br>";
    $convertToMinutes=fn(int $hours) => $hours * 60;
    echo $convertToMinutes(2);
    //echo" <br> 2 hours =" . $convertToMinutes(2) . " minutes"; /if i want to print it in a sentence

    echo"<br>⟡ (printUserInfo) that takes name, age, and job, then prints the following information: My Name is Name, I am Age year old, my role is Job ,<br>";
    $printUserInfo=fn(string $name,int $age,string $job) => "My Name is $name, I am $age year old, my role is $job";
    echo $printUserInfo("Youssef", 25, "Developer");

    //want other functions to practice with arrow functions? here are some ideas:
    echo"<br>⟡ (calculateArea) that takes length and width and returns the area of a rectangle. <br>";
    $calculateArea=fn(int $length,int $width) => $length * $width;
    echo $calculateArea(5, 10);
    