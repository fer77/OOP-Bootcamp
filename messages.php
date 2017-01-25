<?php 

//* Message: How objects communicate with each other.

//* Remember: hunt the nouns

class Person {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class Business {
	protected $staff;

	//* If our business depends on Staff in order to exists then require that in a constructor.
	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}
						//* Type hinting
	public function hire(Person $person) {
		//* What will be tracking $person Business or Staff, if Staff add $person to the staff collection.
		$this->staff->add($person); //* At this point, this staff property will be equal to a new instance of Staff.
					//* Add this method to Staff.
	}

	public function getStaffMembers() {
		return $this->staff->members();
							//* Add this method to Staff.
	}
}

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

//* Instantiate our new person:
$tina = new Person('Tina Belcher');

//* Remember that our business depends on Staff to run:
$staff = new Staff([$tina]);
$bobsBurgers = new Business($staff);

//* The business will hire Tina.
//$bobsBurgers->hire($tina); //* Our instantiation of Staff should equal Tina.

//* The business hires a new staff member:
$bobsBurgers->hire(new Person('Gene Belcher'));

var_dump($bobsBurgers->getStaffMembers());

 ?>