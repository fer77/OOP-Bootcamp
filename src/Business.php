<?php 

namespace BobsBurgers;
use BobsBurgers\Users\Person;

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

 ?>