<?php
declare(strict_types=1);

namespace App\Company;

class Gym {
    private const MONTHLY_PRICE = 500;
    private const QUARTERLY_PRICE = 1350;
    private const YEARLY_PRICE = 4800;
    private const PERSONAL_TRAINING_PRICE = 200;

    private string $name;
    private string $city;
    private int $capacity;
    private array $members = [];
    private int $subscriptions = 0;
    private float $revenue = 0;
    private float $expenses = 0;

    private static int $totalBranches = 0;
    private static int $totalMembers = 0;
    private static int $totalSubscriptions = 0;
    private static float $totalRevenue = 0;
    private static float $totalExpenses = 0;
    private static array $allMembers = [];

    // Challenge 1
    public function create(string $name, string $city, int $capacity): void {
        $this->name = $name;
        $this->city = $city;
        $this->capacity = $capacity;

        self::$totalBranches++;

        echo "✅ Branch Created Successfully: '{$this->name}' in {$this->city} (Capacity: {$this->capacity}).<br>";
    }

    private function getSubscriptionPrice(string $type): float {
        return match (strtolower($type)) {
            'monthly'   => self::MONTHLY_PRICE,
            'quarterly' => self::QUARTERLY_PRICE,
            'yearly'    => self::YEARLY_PRICE,
            'personaltraining'    => self::PERSONAL_TRAINING_PRICE,
            default     => 0.0
        };
    }

    // Challenge 2
    public function addMember(int $id, string $name, string $phone, string $subscriptionType): void {
        if (count($this->members) >= $this->capacity) {
            echo "❌ Error: Cannot add member '{$name}'. Branch '{$this->name}' is at full capacity.<br>";
            return;
        }

        $exists = array_filter($this->members, fn($m) => $m['id'] === $id);
        if (!empty($exists)) {
            echo "❌ Error: Member ID {$id} already exists in '{$this->name}'.<br>";
            return;
        }

        $price = $this->getSubscriptionPrice($subscriptionType);

        $memberData = [
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'subscription_type' => $subscriptionType,
            'price' => $price,
            'branch_name' => $this->name
        ];

        $this->members[] = $memberData;
        $this->subscriptions++;
        $this->revenue += $price;

        self::$allMembers[] = $memberData;
        self::$totalSubscriptions++;
        self::$totalRevenue += $price;
        self::$totalMembers++;

        echo "Member Added: '{$name}' registered under '{$subscriptionType}' subscription at '{$this->name}'.<br>";
    }

    // Challenge 3
    public function renewSubscription(int $id, string $newSubscriptionType): void {
        $foundMember = array_filter($this->members, fn($m) => $m['id'] === $id);

        if (empty($foundMember)) {
            echo "❌ Error: Member ID {$id} not found in branch '{$this->name}'.<br>";
            return;
        }

        $newPrice = $this->getSubscriptionPrice($newSubscriptionType);

        $this->members = array_map(function($m) use ($id, $newSubscriptionType, $newPrice) {
            if ($m['id'] === $id) {
                $m['subscription_type'] = $newSubscriptionType;
                $m['price'] = $newPrice;
            }
            return $m;
        }, $this->members);

        self::$allMembers = array_map(function($m) use ($id, $newSubscriptionType, $newPrice) {
            if ($m['id'] === $id && $m['branch_name'] === $this->name) {
                $m['subscription_type'] = $newSubscriptionType;
                $m['price'] = $newPrice;
            }
            return $m;
        }, self::$allMembers);

        $this->subscriptions++;
        $this->revenue += $newPrice;

        self::$totalSubscriptions++;
        self::$totalRevenue += $newPrice;

        echo "Subscription Renewed: Member ID {$id} updated to '{$newSubscriptionType}' at '{$this->name}'.<br>";
    }

    // Challenge 4
    public function removeMember(int $id): void {
        $initialCount = count($this->members);

        $this->members = array_filter($this->members, fn($m) => $m['id'] !== $id);

        if (count($this->members) === $initialCount) {
            echo "❌ Error: Member ID {$id} not found in branch '{$this->name}'.<br>";
            return;
        }

        self::$allMembers = array_filter(self::$allMembers, fn($m) => !($m['id'] === $id && $m['branch_name'] === $this->name));
        self::$totalMembers--;

        echo "Member Removed: ID {$id} has been deleted from '{$this->name}'.<br>";
    }

    // Challenge 5
    public function addExpense(float $amount): void {
        $this->expenses += $amount;
        self::$totalExpenses += $amount;

        echo "Expense Recorded: Added {$amount} " . Gym::MONTHLY_PRICE . " in expenses for '{$this->name}'.<br>";
    }

    // Challenge 6
    public function membersReport(): void {
        echo "<br><h3>=== MEMBERS REPORT FOR BRANCH: {$this->name} ===</h3><br>";
        if (empty($this->members)) {
            echo "No members registered in this branch.<br>";
            return;
        }

        foreach ($this->members as $m) {
            echo "ID: {$m['id']} | Name: {$m['name']} | Phone: {$m['phone']} | Type: {$m['subscription_type']} | Price: {$m['price']}<br>";
        }
        echo "Total Branch Members: " . count($this->members) . "<br>";
        echo "==================================================<br>";
    }

    // Challenge 7
    public function report(): void {
        $currentMembersCount = count($this->members);
        $availableCapacity = $this->capacity - $currentMembersCount;
        $netProfit = $this->revenue - $this->expenses;

        echo "<br><h3> FINANCIAL REPORT: {$this->name} </h3><br>";
        echo "City: {$this->city}<br>";
        echo "Max Capacity: {$this->capacity}<br>";
        echo "Current Members: {$currentMembersCount}<br>";
        echo "Available Capacity: {$availableCapacity}<br>";
        echo "Total Subscriptions Sold: {$this->subscriptions}<br>";
        echo "Total Revenue: {$this->revenue}<br>";
        echo "Total Expenses: {$this->expenses}<br>";
        echo "Net Profit: {$netProfit}<br>";
        echo "==================================================<br>";
    }

    // Challenge 8
    public static function companyMembersReport(): void {
        echo "<h3>         OVERALL COMPANY GLOBAL MEMBERS REPORT             </h3><br>";
        echo "==================================================<br>";

        foreach (self::$allMembers as $m) {
            echo "ID: {$m['id']} | Name: {$m['name']} | Phone: {$m['phone']} | Type: {$m['subscription_type']} | Price: {$m['price']} | Branch: {$m['branch_name']}<br>";
        }
        echo "Total Global Company Members: " . self::$totalMembers . "<br>";
        echo "==================================================<br>";
    }

    // Challenge 9
    public static function companyReport(): void {
        $totalProfit = self::$totalRevenue - self::$totalExpenses;

        echo "<h3>         OVERALL COMPANY GLOBAL FINANCIAL REPORT          </h3><br>";
        echo "==================================================<br>";
        echo "Total Active Branches: " . self::$totalBranches . "<br>";
        echo "Total Global Members : " . self::$totalMembers . "<br>";
        echo "Total Global Subscriptions Sold: " . self::$totalSubscriptions . "<br>";
        echo "Total Global Revenue : " . self::$totalRevenue . "<br>";
        echo "Total Global Expenses: " . self::$totalExpenses . "<br>";
        echo "Total Company Profit : " . $totalProfit . "<br>";
        echo "==================================================<br>";
    }

    // Getters for Extra Challenges
    public function getMembers(): array {
        return $this->members;
    }

    public static function getAllMembers(): array {
        return self::$allMembers;
    }
}
