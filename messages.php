<?php

/**
* MESSAGES 101
*/
class Person
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name; //This assigns the name to the protected property.
	}
}

class Business
{
	
	protected $staff;
						//Dependency: Business "depends" on the Staff in order to work.
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	//Type-penting:
	public function hire(Person $person)
	{
		//add $person to the staff collection.
		$this->staff->add($person); //Will be equal to a new instance of Staff.
	}

	//What if we need a way to quickly fetch the staff?
	public function getStaffmembers()
	{
		return $this->staff->members();
	}
}

class Staff
{

	protected $members = [];

	//When we stanciate Staff we want to add that new person right away:
	public function __construct($members = []) //This means that: "You can pass some staff members, but it is not required." If nothing is passed no error will be thrown, it'll default to an array.
	{
		$this->members = $members;
	}

	public function add(Person $person)
		{
			$this->members[] = $person;
		}

//This is a getter, but we are ommitting the get.  It can be either "getMembers" or "members".
	public function members()
		{
			return $this->members;
		}
}

$fernando = new Person("Fernando Fernandez");

$staff = new Staff([$fernando]);

$laracasts = new Business($staff);

$laracasts->hire(new Person("Jane Doe"));

var_dump($laracasts->getStaffMembers());