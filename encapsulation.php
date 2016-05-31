<?php

/*
 * ENCAPSULATION
 */

/*
class LightSwitch {
//These need to be accessed by the our users:	
	public function on()
	{
		# code...
	}

	public function off()
	{
		# code...
	}
//The our users do not need access to these:
	private function connect()
	{
		//This method may only and exclusivly be accessed from within this LightSwitch class.  Calling this method outside of this class nobody has access to this method.
	}

	protected function activate()
	{
		//Same as private, the difrence is this class can be "extends".  If we "extends" the LightSwitch class this method can be accessed.
	}
}

$switch = new LightSwitch;
$switch->connect();
*/

class Person {
	private $name;
	private $age;

	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if ($age < 18) {
			throw new Exception("You are not old enough.");
		}
		$this->age = $age;
	}
}

$john = new Person("John Doe");
$john->setAge(30);

//Use encapsulation to prevent this from bypassing our setter.  Use private on our $name and $age.
$john->age = 3;

var_dump($john->getAge());
