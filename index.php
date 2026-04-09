<?php

abstract class Figure
{
    protected $area;
    protected $color;
    protected $sidesCount;

    abstract public function infoAbout();
}

interface Area
{
    public function getArea();
}

class Rectangle extends Figure implements Area
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->sidesCount = 4;
    }

    public function getArea()
    {
        return $this->a * $this->b;
    }

    public function infoAbout()
    {
        return "Это класс прямоугольника. У него 4 стороны";
    }
}

class Square extends Figure implements Area
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
        $this->sidesCount = 4;
    }

    public function getArea()
    {
        return $this->a * $this->a;
    }

    public function infoAbout()
    {
        return "Это класс квадрата. У него 4 стороны";
    }
}

class Triangle extends Figure implements Area
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->sidesCount = 3;
    }

    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function infoAbout()
    {
        return "Это класс треугольника. У него 3 стороны";
    }
}

$rec1 = new Rectangle(5, 10);
$rec2 = new Rectangle(4, 8);

$squ1 = new Square(6);
$squ2 = new Square(9);

$tri1 = new Triangle(3, 4, 5);
$tri2 = new Triangle(6, 8, 10);

echo $rec1->infoAbout() . "<br>";
echo $rec1->getArea() . "<br><br>";

echo $rec2->infoAbout() . "<br>";
echo $rec2->getArea() . "<br><br>";

echo $squ1->infoAbout() . "<br>";
echo $squ1->getArea() . "<br><br>";

echo $squ2->infoAbout() . "<br>";
echo $squ2->getArea() . "<br><br>";

echo $tri1->infoAbout() . "<br>";
echo $tri1->getArea() . "<br><br>";

echo $tri2->infoAbout() . "<br>";
echo $tri2->getArea() . "<br><br>";

?>
