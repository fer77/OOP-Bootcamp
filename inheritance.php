<?php

/*
 * INHERITANCE
 */

/*
//Parent class(base class):
class Mother {
	public function eyeCount()
	{
		return 2;
	}
}

//Child class(sub-class)
//extends (keyword) allows the child to "inherit" behaviors from its parent class:
class Child extends Mother{

}

//because Child "extends" Mother, it has access to its methods:
(new Child)->eyeCount(); //2
*/

/*
abstract class Shape
{
	//There is no one algorithim we can reference here for our square and triangle class.
	//For cases where the algorithim will be something for one and for others something else add it individually to ea. class.
	//There really isn't one generic shape, but there is one common behavior the best thing to do is make class Shape an "abstract" to add functionality.  Since class Shape will not ever be instanciated we can make it abstract.
	
	protected $color;

	public function __construct($color = 'red') //$color can be set to default like this: $color = 'someColor'
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	//If ea. sub-class needs to define its own method for their area then we can create an abstract method, refered to as:
	//TEMPLATE METHOD DESIGN PATTERN:
	abstract protected function getArea(); //When we make a method "abstract" we do not need to declare its body {} because there is no logic or behavior here.  This just says each sub-class needs to provide this.
}

class Square extends Shape
{
	protected $length = 4;

	public function getArea()
	{
		return pow($this->length, 2);
	}
}

class Triangle extends Shape
{
	protected $base = 4;
	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape {
	//if we instanciate circle:
	//echo (new Circle)->getArea();
	//We will get an error, because there is no getArea() method for the Circle to access anywhere.
	protected $radius = 5;
	public function getArea()
	{
		return M_PI * pow($this->radius, 2);
	}
}

//echo (new Square)->getArea();
//echo (new Triangle)->getArea();

//$circle = new Circle;
//echo $circle->getArea();

(new Circle)->getArea(); //short hand
*/