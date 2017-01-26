<?php

//* This is common practice:
// require 'src/Business.php';
// require 'src/Person.php';
// require 'src/Staff.php';
// * Instead autoload these required files using composer:
//* 1. Create a 'composer.json' file on the root of the project.
//* 2. No need to declare any dependencies just {}.
//* 3. Run 'composer install' in the command line from the project folder.
//* 4. Look for the newly created 'vendor' directory and check your 'autoload.php' file.
//* 5. Set up 'composer.json'.
//* "psr-4" A standard (convention) that specifies how our files may be autoloaded.
//* 6. Add the namespace for whatever the product/app is, in this case 'namespace BobsBurgers;' to all the files we'll be using and the root directory for it, in this case 'src'.  Make sure the 'namspace' reflects the directory structure 'namespace BobsBurgers\Users\...'
//* 7. Run 'composer dump-autoload'.  This will add 'autoload_psr4.php' and namespaces to our 'composer' directory.
//* 8. 'require' our 'autoload.php' file here or in your 'index.php' file.

//require 'vendor/autoload.php';

//* Instead of doing: $tina = new BobsBurgers\Person('Tina Belcher');
//* we can: use BobsBurgers\Person; and write the above like before: $tina = new Person('Tina Belcher');

use BobsBurgers\Business;
use BobsBurgers\Users\Person;
use BobsBurgers\Staff;

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