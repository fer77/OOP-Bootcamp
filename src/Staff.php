<?php 

namespace BobsBurgers;
use BobsBurgers\Users\Person;

class Staff {
	//* When you instantiate Staff employees should be added right away:
	public function __construct($members = []) {
		$this->members = $members;
		//* This will prevent new $persons to be added to $members unless it passes through this function or we can add a default to our arguments.
	}
	//* Staff will serve as a collection of employees:
	protected $members = [];

	public function add(Person $person) {
		$this->members[] = $person;
	}

	public function members() {
		//* return the array:
		return $this->members;
	}
}

 ?>