<?php

declare(strict_types=1);

//Challenge 1
// $scores= [55,42,67,80,29] ;
// $resaults= array_any($scores,fn($score) => $score >= 50 ?"Pass":"Fail") ;
// var_dump($resaults) ;

//Challenge 2
// $products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
// $new_products=array_chunk($products,3);
// var_dump($new_products);

//Challenge 3
// $names = ["Ahmed", "Mona", "Omar", "Sara"];
// $scores = [85, 92, 78, 96];
// $students = array_combine($names, $scores);
// var_dump($students);

//Challenge 4
// $store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
// $store2 = ["Mouse", "Monitor", "Printer"];
// $full_store=array_diff($store1, $store2);
// var_dump($full_store);

//challenge 5
// $ages = [12, 25, 17, 30, 16, 21, 14];
// $adults=array_filter($ages, fn($age) => $age >= 18);
// var_dump($adults);

//challenge 6
// $scores = [35, 45, 58, 72, 90, 40];
// $passing_scores=array_find($scores, fn($score) => $score >= 60);
// var_dump($passing_scores);

//challenge 7
// $products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
// $firstProduct = $products[array_key_first($products)];
// echo $firstProduct;

//challenge 8
// $products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
// $lastProduct = $products[array_key_last($products)];
// echo $lastProduct;

//challenge 9
// $cart1 = ["Laptop", "Mouse"];
// $cart2 = ["Keyboard", "Monitor", "Printer"];
// $final_cart = array_merge($cart1, $cart2);
// var_dump($final_cart);

//challenge 10
// $participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
// $random=array_rand($participants, 2);
// var_dump($random);

//challenge 11
// $prices = [150, 250, 100, 300];
// $total_price=array_reduce($prices, fn($carry, $price) => $carry + $price, 0);
// var_dump($total_price);

//challenge 12
// $sales = [1200, 850, 2300, 1750, 900];
// $total_sales=array_sum($sales);
// var_dump($total_sales);

//challenge 13   Compact || ectract
// $user = [
//     "name" => "Ahmed",
//     "age" => 25,
//     "job" => "Developer"
// ];
// extract($user);  
// echo $name . ", " . $age . ", " . $job;

//challenge 14
// $products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
// $count=count($products);
// echo $count;

//challenge 15
// $scores = [85, 42, 96, 67, 73, 55];
// sort($scores);
// var_dump($scores);

//challenge 16
// $scores = [45, 80, 55, 92, 60, 38, 75];

// $passedScores = array_filter(
//     $scores,
//     fn($score) => $score >= 60
// );

// $totalPassed = count($passedScores);
// var_dump($passedScores);
// echo "Number of passed students: " . $totalPassed;

//challenge 17
// $branch1 = [450, 200, 700];
// $branch2 = [150, 900, 350];
// $allPrices = array_merge($branch1, $branch2);

// sort($allPrices);

// var_dump($allPrices);

//challenge 18
// $scores = [80, 75, 90, 65, 100];
// $total = array_sum($scores);

// $numberOfStudents = count($scores);

// $average = $total / $numberOfStudents;

// echo $average;

//challenge 19
// $inventory = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];

// $displayed = ["Laptop", "Keyboard", "Printer"];

// $missingProducts = array_diff($inventory, $displayed);

// var_dump($missingProducts);

//challenge 20
// $scores = [35, 90, 45, 75, 60, 28, 100, 50];
// $passedScores = array_filter(
//     $scores,
//     fn($score) => $score >= 50
// );

// $totalPassed = count($passedScores);

// $totalScores = array_sum($passedScores);

// sort($passedScores);

// $firstScore = array_first($passedScores);
// $lastScore = array_last($passedScores);

// // var_dump($totalPassed);
// // var_dump($totalScores);
// // var_dump($passedScores);
// var_dump($firstScore);
// var_dump($lastScore);

//challenge 21
// $prices = [250, 450, 800, 1500, 300];
// var_dump(array_any($prices, fn($price) => $price > 1000));

//challenge 22
// $products = [
//     ["name" => "Laptop", "price" => 1500],
//     ["name" => "Mouse", "price" => 80],
//     ["name" => "Keyboard", "price" => 120],
//     ["name" => "USB Cable", "price" => 50]
// ];
// $affordableProduct = array_find(
//     $products,
//     fn($product) => $product["price"] <= 100
// );

// var_dump($affordableProduct);

//challenge 23
// $scores = [70, 85, 90, 65, 55, 78, 88, 92, 60, 73];
// $groups = array_chunk($scores, 4);

// var_dump($groups);

//challenge 24
// $names = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
// $ages = [17, 24, 19, 16, 30];

// $users = array_combine($names, $ages);

// $adults = array_filter(
//     $users,
//     fn($age) => $age >= 18
// );

// $totalAdults = count($adults);

// $firstAdultName = array_first($adults);

// echo "Adults: ";
// var_dump($adults);

// echo "Number of adults: " . $totalAdults;

// echo "First adult: " . $firstAdultName
//     . ", Age: " . $adults[$firstAdultName];

//challenge 25
// $products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
// $sales = [1200, 250, 450, 700];
// $salesReport = array_combine($products, $sales);

// $totalSales = array_sum($sales);

// $hasHighSales = array_any(
//     $sales,
//     fn($sale) => $sale > 500
// );

// $sortedSales = $sales;
// sort($sortedSales);

// $totalProducts = count($products);

// echo "Sales report:";
// var_dump($salesReport);

// echo "Total sales: " . $totalSales;
// echo "Any sale greater than 500? ";
// var_dump($hasHighSales);

// echo "Sorted sales: ";
// var_dump($sortedSales);

// echo "Number of products: " . $totalProducts;

//challenge 26
// $participants = [
//     "Ahmed",
//     "Mona",
//     "Omar",
//     "Sara",
//     "Ali",
//     "Nour",
//     "Hassan"
// ];
// $winnerKeys = array_rand($participants, 3);

// foreach ($winnerKeys as $key) {
//     echo $participants[$key] . ", ";
// }

// echo "Total participants: " . count($participants);

//challenge 27
// $order = [
//     ["price" => 100, "quantity" => 2],
//     ["price" => 250, "quantity" => 3],
//     ["price" => 50, "quantity" => 4]
// ];
// $total = array_reduce(
//     $order,
//     fn($carry, $item) =>
//         $carry + ($item["price"] * $item["quantity"]),
//     0
// );

// echo $total;

//challenge 28
// $classroomA = ["Ahmed", "Mona", "Omar", "Sara"];
// $classroomB = ["Mona", "Ali", "Sara", "Nour"];
// $onlyInA = array_diff($classroomA, $classroomB);

// $onlyInB = array_diff($classroomB, $classroomA);

// $allStudents = array_merge($classroomA, $classroomB);

// $totalEntries = count($allStudents);

// echo "Only in Classroom A:" ;
// var_dump($onlyInA);

// echo "Only in Classroom B:" ;
// var_dump($onlyInB);

// echo "Combined students:" ;
// var_dump($allStudents);

// echo "Total entries: " . $totalEntries;

//challenge 29
// $products = [
//     ["name" => "Laptop", "quantity" => 10],
//     ["name" => "Mouse", "quantity" => 0],
//     ["name" => "Keyboard", "quantity" => 3],
//     ["name" => "Monitor", "quantity" => 7],
//     ["name" => "Printer", "quantity" => 2]
// ];
// $availableProducts = array_filter(
//     $products,
//     fn($product) => $product["quantity"] > 0
// );

// $hasLowQuantity = array_any(
//     $products,
//     fn($product) => $product["quantity"] < 5
// );

// $quantities = array_column($products, "quantity");

// $totalQuantity = array_sum($quantities);

// $firstProduct = array_first($availableProducts);
// $lastProduct = array_last($availableProducts);

// echo "Available products:" ;
// var_dump($availableProducts);

// echo "Any product has quantity below 5? ";
// var_dump($hasLowQuantity);

// echo "Total quantity: " . $totalQuantity ;

// echo "First product: " . $firstProduct["name"] ;
// echo "Last product: " . $lastProduct["name"];

//challenge 30
$names = [
    "Ahmed",
    "Mona",
    "Omar",
    "Sara",
    "Ali",
    "Nour",
    "Hassan"
];

$scores = [85, 92, 45, 78, 98, 55, 67];

$students = array_combine($names, $scores);

$passedStudents = array_filter(
    $students,
    fn($score) => $score >= 60
);

$totalPassed = count($passedStudents);

$totalScores = array_sum($passedStudents);

$hasHighScore = array_any(
    $students,
    fn($score) => $score >= 95
);

$passingScores = array_values($passedStudents);

sort($passingScores);

$firstScore = array_first($passingScores);
$lastScore = array_last($passingScores);

$scoreGroups = array_chunk($passingScores, 3);

echo "Students report:" ;
var_dump($students);
echo "<br>";

echo "Passed students:" ;
var_dump($passedStudents);
echo "<br>";

echo "Number of passed students: " . $totalPassed ;
echo "<br>";

echo "Total passing scores: " . $totalScores ;
echo "<br>";

echo "Any student scored 95 or above? ";
var_dump($hasHighScore);
echo "<br>";

echo "Sorted passing scores:";
var_dump($passingScores);
echo "<br>";

echo "First passing score: " . $firstScore ;
echo "Last passing score: " . $lastScore;

echo "Score groups:";
var_dump($scoreGroups);
