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

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Rabotnik("Анна", 25, 30000);
$worker2 = new Rabotnik("Иван", 30, 40000);

echo "Имя 1: " . $worker1->getName() . "<br>";
echo "Возраст 1: " . $worker1->getAge() . "<br>";
echo "Зарплата 1: " . $worker1->getSalary() . "<br><br>";

echo "Имя 2: " . $worker2->getName() . "<br>";
echo "Возраст 2: " . $worker2->getAge() . "<br>";
echo "Зарплата 2: " . $worker2->getSalary() . "<br><br>";

echo "Сумма возрастов: " . ($worker1->age + $worker2->age) . "<br>";
echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . "<br>";

?>
