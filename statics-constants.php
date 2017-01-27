<?php 

//* 'static' are namespaced, but globally accesible functions.  Reference 'static' functions with 'Class::methodName()'. When you think 'static', think 'shared', they are not bound to any specific object.  'static' properties tend to break encapsulation.  Most of the time 'statics' are not the right choice.
//* :: Scope resolution operator.

class Math {
//* The method 'add' is not really dynamic, so it would be ok for this method to be 'static'.  Careful when using 'static', and keep in mind that 'static' is considered an antipattern.
	public static function add() {
		return array_sum(func_get_args());
	}
}

// class Person {
//* We can also have static properties, but remember 'static' = 'shared', they are not bound to any specific object. 'static properties' break encapsulation.
// 	public static $age = 1;

// 	public function hasBirthday() {
// 		static::$age++;
// 	}
// }

//* This works much better without 'static'.
class Person {
	public $age = 1;

	public function hasBirthday() {
		$this->age++;
	}
//Ask Person for their age.
	public function age() {
		return $this->age;
	}
}

$joe = new Person;
$joe->hasBirthday(); //2
$joe->hasBirthday(); //3
//echo $joe->age();

$jane = new Person;
$jane->hasBirthday(); //* Would expect 2, but instead get 4.
//echo $jane->age();

//echo Person ::$age;

//* Access the method as a public function.
//$math = new Math;
//var_dump($math->add(1, 2, 3, 4));

//* Access the methos as a 'static' function.
//echo Math::add(1, 2, 3); //* Now we can access this method from anywhere(global).


class BankAccount {
//* When a value should not be manipulated use 'const'.  Always all uppercase.
	const TAX = .09; //* PHP will not allow us to change this value.
}

echo BankAccount::TAX;

 ?>