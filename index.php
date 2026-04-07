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

    public function checkAge()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}

$worker1 = new Rabotnik("Анна", 25, 30000);
$worker2 = new Rabotnik("Иван", 17, 40000);

echo $worker1->checkAge() . "<br>";
echo $worker2->checkAge();

?>
