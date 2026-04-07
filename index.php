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
            echo "Вам работать в нашей компании еще рано";
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$worker1 = new Rabotnik("Анна", 25, 30000);

$worker1->setAge(22);
echo $worker1->getAge() . "<br>";

$worker1->setAge(15);

?>
