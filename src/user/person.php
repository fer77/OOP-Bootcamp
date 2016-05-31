<?php

namespace Acme\user;
//Don't forget to run "composer dump-autoload" in terminal

class Person
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name; //This assigns the name to the protected property.
	}
}