<?php

//Procedural PHP would do:
/*
require 'src/person.php';
require 'src/business.php';
require 'src/staff.php';
*/
//but it is too much work.  Come in composer's autoload.
//Because we have namespaced and autoloaded Person, Staff, and Business we now need to pre-fix the name we chose (Acme).

//add this to your "index.php" file:
//require 'vendor/autoload.php';
/*
use Acme\user\Person;
use Acme\Staff;
use Acme\Business;

$fernando = new Person("Fernando Fernandez");

$staff = new Staff([$fernando]);

$laracasts = new Business($staff);

$laracasts->hire(new Person("Jane Doe"));

var_dump($laracasts->getStaffMembers());
*/
