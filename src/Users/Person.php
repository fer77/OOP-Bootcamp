<?php 

//* The namespace should follow the directory structure, since this file is in a difrent directory:
namespace BobsBurgers\Users;

class Person {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

 ?>