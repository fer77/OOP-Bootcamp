<?php 

//* We use inheritance when we want to inherit behavior from a parent class.

//* Parent class (base class)
class Mother {
	public function getEyeCount() {
		return 2;
	}
}

//* Child class (sub class)
class Child extends Mother {

}

(new Child)->getEyeCount(); //2

//* Inheritance at work

//* abstract: Add functionality here, but this class will never be instanciated.  Allows inheritance, but users of this class will not be able to instantiate this class incorrectly.
abstract class Shape {
//	protected $length = 4;
//* There is no one algorithm that can be referenced here.
//* This method works for our square class:
// 	public function getArea() {
// 		return pow($this->length, 2);
//* It makes no sense to have only a method here that only works for one class.  It wouldn't work for any other shape.
// 	}
//* Why keep an empty class Shape?
//* 1. Will there ever be any attributes or behavior that will be shared across every shape.  If yes, place that functionality here.
//* 2. Use it as a "contract" (abstract).  It will extract common behavior like the getArea().

//* We can add shared functionality and create a single point of entry.
	protected $color;
										//* If no color is passed as an argument 'red' will be the default color.
	public function __construct($color = 'red') {
		$this->color = $color;
	}

	public function getColor() {
		return $this->color;
	}

//* If every sub class needs to define its own area method we can define that here:
	abstract protected function getArea();
	//* When 'abstract' is added to a method, that method will have no body, because there will be no 'logic' here.  Sub classes will provide this.
}

			//* extends activates inheritance and helps avoid repetition.
class Square extends Shape {
	protected $length = 4;

	public function getArea() {
		return pow($this->length, 2);
	}
}

class Triangle extends Shape {
	protected $base = 4;
	protected $height = 7;

//* This method will overwrite the parent method.
	public function getArea() {
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape {
	protected $radius = 5;

	public function getArea() {
		return M_PI * pow($this->radius, 2);
	}
}

//* Long form:
//$circle = new Circle;
//echo $circle->getArea();

//* Short hand:
//echo (new Square)->getArea();
echo (new Square('yellow'))->getColor();
// echo (new Triangle)->getArea();
//echo (new Circle)->getArea();

//* Favor composition over inheritance:
//* If you find that you constantly want to inherit from other classes, you should use composition.

 ?>