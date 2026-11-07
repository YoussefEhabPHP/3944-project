<?php

declare(strict_types=1);

namespace App\Company\Departments;

abstract class Employee
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $title,
        private float $salary
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->title = $title;
        $this->salary = $salary;
    }

    public static function vacations () {
        echo '<h4>Vacation....</h4>';
    }

    public static function permissions () {
        echo '<h4>Permissions....</h4>';
    }

    protected abstract function skills();
    public abstract function promotionType();
    public abstract function WorkingEnv();
}
