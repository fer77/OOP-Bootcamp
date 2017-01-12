<?php 

//* Why use 'getter' & 'setter' methods?
//* 'getter' & 'setter' methods give protection and security to applications.
//* For example an age limit can be set with these two methods.

class Person {

	public $name;

	public $age;

	function __construct($name)
	{
		$this->name = $name;
	}
	//* GETTER:
	//* With 'getters' & 'setters' we can introduced whatever kind of behavior the app needs.
	public function getAge() {
		return $this->age * 365;
	}
	//* There could be behavior associated with 'setting' or 'getting' a particular property.
	//* The problem starts when properties are used directly($fernando->age = 35;), there's no way to attach (hook) this behavior.
	//* SETTER:
	public function setAge($age) {
		if($age < 18) 
		{
			throw new Exception("Not old enough.");
		}
		$this->age = $age;
	}
}

$fernando = new Person('Fer');
//* Pass a new property:
//$fernando->age = 35; //* There's no way to attach (hook) our method setAge().  $fernando->setAge(17) won't throw setAge's exeption.
//$fernando->setAge(17);
$fernando->setAge(35);
//$fernando->age++;

var_dump($fernando->getAge());


 ?>