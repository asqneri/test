<?php

abstract class Figure {
	protected $area;
	protected $color;
	protected $sidesCount;
	
	abstract public function infoAbout()
}

interface Area {
	public function getArea()
}

class Rectangle extends Figure implements Area {
	private $a;
	private $b;
	
	public function __construct($a, $b) {
		$this->a = $a;
		$this->b = $b;
		$this->sidesCount = 4;		
	}
	
	public function getArea() {
		return $this->a * $this->b;
	}
	
	public function infoAbout() {
		return "Это класс прямоугольник. У него 4 стороны";
	}
}

?>
