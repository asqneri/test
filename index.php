<?php

class Rabotnik
{
    public $name;
    private $age;
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

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function setAge($age)
    {
        if ($this->checkAge($age) == true) {
            $this->age = $age;
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$worker1 = new Rabotnik("Анна", 25, 30000);
$worker2 = new Rabotnik("Иван", 30, 40000);

echo "Имя первого работника: " . $worker1->getName() . "<br>";
echo "Имя второго работника: " . $worker2->getName() . "<br>";

echo "Сумма зарплат: " . ($worker1->getSalary() + $worker2->getSalary()) . "<br>";
echo "Сумма возрастов: " . ($worker1->getAge() + $worker2->getAge()) . "<br>";

$worker1->setAge(22);
echo "Новый возраст первого работника: " . $worker1->getAge() . "<br>";

$worker2->setAge(16);

?>
