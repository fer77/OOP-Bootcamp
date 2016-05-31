<?php

//Static methods: name spaced, but globally available functions.
//In many cases Static is an 'anti-pattern' (Static == shared).

 class Math {
   public static function add() {
     return array_sum(func_get_args());
   }
 }

//When using static this can be removed:
/*
 $math = new Math;
 var_dump($math->add(1, 2, 3, 4));
*/

//Access Static methods like this:
//echo Math::add(1, 2, 3); //We are not longer working with an instance of our Math class, we are accessing our add method from anywhere (global function).



//We can make Static properties too:

class Person {
  //public static $age = 1; //This property breakes encapsulation.  The age property should be stored as an instance variable like this:
  public $age = 1;

  public function haveBirthday()
  {
    //static::$age += 1; // :: scope resolution operator.
    $this->age += 1;
  }
  public function age()
  {
    return $this->age;
  }
}

/*
$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();
echo $joe->age();

$jane = new Person;
$jane->haveBirthday(); //You would expect her to be 2, but because Static properties are shared, and not bound to a specific onject.  This will echo 4.
echo $jane->age();

//echo Person::$age;
*/

class BankAccount {
  //public static $tax = .09; //This value should, under no circumstance change:
  const TAX = .09;
}

//BankAccount::$tax = 1.5; //This will change the value weather it is 'public static' or 'private static'.
echo BankAccount::TAX;
