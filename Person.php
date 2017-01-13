<?php 

//* Encapsulation:
//* A "black box" for our objects, that only exposes the methods and behavior that are apropiate to them (relevant to the public interface).
//* Objects can be encapsulated in two ways:
//* 1. private: this method may only and exclusivly be accessed from within its class, can not be 'extended'.
//* 2. protected: same as private, but can be 'extended'.

class Person {

//* Ideally we want to hide information and behavior as much as we can.
	private $name;

	private $age;

	function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getAge() {
		return $this->age * 365;
	}
	
	public function setAge($age) {
		if($age < 18) 
		{
			throw new Exception("Not old enough.");
		}
		$this->age = $age;
	}
}

$fernando = new Person('Fer');
$fernando->setAge(35);
//* This app has 'getters' & 'setters' but they can be overwritten direcly:
//$fernando->age = 25; //* Bypasses our setAge() 'setter'.

var_dump($fernando->getAge());

 ?>