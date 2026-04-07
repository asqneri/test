<?php

class Rabotnik
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary($worker)
    {
        return $this->salary + $worker->salary;
    }
}

$worker1 = new Rabotnik("Анна", 25, 30000);
$worker2 = new Rabotnik("Иван", 30, 40000);

echo "Сумма зарплат: " . $worker1->getSalary($worker2);

?>
