<?php

namespace Acme;

use Acme\user\Person;


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