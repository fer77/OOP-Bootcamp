<?php

/*
 * GETTERS AND SETTERS
 */

class Person {
	public $name;
//Add another property "age".
	public $age;

	public function __construct($name)
	{
		$this->name = $name;
	}
	/*
	Getters and setters offer parameters to our aplications, for example if we want to set an age limit for our users, we can do that with getters and setters.  In other words they introduce behavior to our application.
	 */
	
	public function getAge()
	{
		//Getter does not accept an argument it just returns a property.
		//What if we want to return the age in days instead of years?
		return $this->age * 365;
	}

	public function setAge($age)
	{
		//Here we can enforce rules or parameters for our app:
		if ($age < 18) {
			throw new Exception("You are not old enough.");
		}
		$this->age = $age;
	}
}

$john = new Person("John Doe");
//What if we want to add his age?
//$john->age = 30;
//$john->age++;
//Now instead of setting John's age directly we can use
$john->setAge(30);

//If we set the age below 18 we get an exception, but if instead we do:
$john->age = 3; //This can be a problem.  Encapsulation can solve this.

var_dump($john->getAge());