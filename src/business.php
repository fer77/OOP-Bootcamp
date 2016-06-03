<?php

namespace Acme;
//Don't forget to run "composer dump-autoload" in terminal.

use Acme\user\Person;

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
