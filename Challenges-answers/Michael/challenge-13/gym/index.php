<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Company\Gym;

echo "<h2>        FITNESS COMPANY MANAGEMENT SYSTEM       </h2>";
echo "==================================================<br>";

// 6. Create Gym Branch Objects
$cairoGym = new Gym();
$cairoGym->create("Smart Gym - Cairo", "Cairo", 100);

$alexGym = new Gym();
$alexGym->create("Smart Gym - Alexandria", "Alexandria", 150);

$gizaGym = new Gym();
$gizaGym->create("Smart Gym - Giza", "Giza", 200);

echo "==================================================<br>";

// 7. Add Members
// Add Members to Cairo Branch
$cairoGym->addMember(101, "Ahmed Ali", "01011111111", "monthly");
$cairoGym->addMember(102, "Mohamed Samir", "01022222222", "quarterly");
$cairoGym->addMember(103, "Omar Hassan", "01033333333", "yearly");
$cairoGym->addMember(104, "Karim Adel", "01044444444", "monthly");

echo "<br>";
// Add Members to Alexandria Branch
$alexGym->addMember(201, "Ali Mahmoud", "01111111111", "yearly");
$alexGym->addMember(202, "Youssef Ahmed", "01122222222", "monthly");
$alexGym->addMember(203, "Mostafa Tarek", "01133333333", "quarterly");

echo "<br>";
// Add Members to Giza Branch
$gizaGym->addMember(301, "Hassan Ibrahim", "01211111111", "quarterly");
$gizaGym->addMember(302, "Amr Khaled", "01222222222", "monthly");
$gizaGym->addMember(303, "Ziad Mohamed", "01233333333", "yearly");
$gizaGym->addMember(304, "Seif Ashraf", "01244444444", "monthly");


echo "==================================================<br>";

// 8. Gym Operations
// Cairo Gym Operations
$cairoGym->renewSubscription(101, "yearly");
$cairoGym->renewSubscription(102, "monthly");
$cairoGym->removeMember(104);
$cairoGym->addExpense(5000);

echo "<br>";
// Alexandria Gym Operations
$alexGym->renewSubscription(202, "quarterly");
$alexGym->addMember(204, "Peter Nabil", "01155555555", "yearly");
$alexGym->removeMember(203);
$alexGym->addExpense(7500);

echo "<br>";
// Giza Gym Operations
$gizaGym->renewSubscription(301, "yearly");
$gizaGym->addMember(305, "Fady Sameh", "01255555555", "quarterly");
$gizaGym->addExpense(10000);


echo "==================================================<br>";
// 9. DISPLAY ALL STANDARD REPORTS
$cairoGym->membersReport();
$alexGym->membersReport();
$gizaGym->membersReport();

$cairoGym->report();
$alexGym->report();
$gizaGym->report();

Gym::companyMembersReport();
Gym::companyReport();


echo "==================================================<br>";
// 10. EXTRA CHALLENGES: ARRAY FUNCTIONS

$allGlobalMembers = Gym::getAllMembers();

// Challenge A: Find Yearly Subscribers across the entire company
echo "<h3>Challenge A: Yearly Subscribers Global List:</h3>";
$yearlySubscribers = array_filter($allGlobalMembers, fn($m) => strtolower($m['subscription_type']) === 'yearly');
foreach ($yearlySubscribers as $m) {
    echo "- Name: {$m['name']} (Branch: {$m['branch_name']})<br>";
}

// Challenge B: Get Member Names for Cairo Branch only
echo "<br><h3>Challenge B: Cairo Branch Member Names:</h3><br>";
$cairoNames = array_map(fn($m) => $m['name'], $cairoGym->getMembers());
var_dump ($cairoNames);

// Challenge C: Count Company Members using the global array count
echo "<br><h3>Challenge C: Total Global Members Count (via Array function):</h3> " . count($allGlobalMembers) . "<br>";

// Challenge D: Find Monthly Subscribers across the entire company
echo "<br><h3>Challenge D: Monthly Subscribers Global List:</h3><br>";
$monthlySubscribers = array_filter($allGlobalMembers, fn($m) => strtolower($m['subscription_type']) === 'monthly');
foreach ($monthlySubscribers as $m) {
    echo "- Name: {$m['name']} (Branch: {$m['branch_name']})<br>";
}

// Challenge E: Get All Member Names across the whole company via array_column
echo "<br><h3>Challenge E: All Company Member Names (via array_column):</h3><br>";
$allNames = array_column($allGlobalMembers, 'name');
var_dump ($allNames);
