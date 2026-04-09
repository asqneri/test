<?php

abstract class Figure
{
	protected $area;
	protected $color;
	protected $sidesCount;
	
	abstract public function infoAbout()
}

interface Area
{
	public function getArea()
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
		return "Это класс прямоугольник. У него 4 стороны";
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
		return "Это класс квадрат. У него 4 стороны";
	}
}

class Triangle extends Figure implements Area
{
	private $a;
	private $b;
	private $c;
	
	public function __construct($a, $b, $c)
	{
		$this->a = a;
		$this->b = b;
		$this->c = c;
		$this->sidesCount = 3;
	}
	
	public function getArea()
	{
		$p = ($this->a + $this->b + $this->c) / 2;
		return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
	}
	
	public function infoAbout()
	{
		return "Это класс треугольник. У него 3 стороны"
	}
}

?>
