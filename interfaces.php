<?php

//Interfaces are like contracts: it lays down the terms for whatever implimentation must adhere to.
/*
interface Animal {
  public function communicate(); //No braces, because this isn't for logic, this is for contract.  This sets the "terms".
}

class Dog implements Animal {
  public function communicate()
  {
    return 'bark';
  }
} //Because we implement Animal (it must adhere to the "contrat"), PHP is going to force the use of the methods specified in Animal (communicate()).

class Cat implements Animal {
  public function communicate()
  {
    return 'meow';
  }
} //Dog and Cat are interchangable.

interface Logger {
  public function execute($message);
} // If there are ever classes or tasks where you see multiple inplementations, multiple difrent methods for executing a task, then create an interface.


class LogToFile  implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to a file: ' . $message);
  }
}

class LogToDatabase implements Logger {
  public function execute($message)
  {
    var_dump('Log the message to a database b: '. );
  }
}
*/

//...

/*
class UsersController {

// Collaborators.

protected $logger;

  public function __construct(Logger $logger) //Concrete class: specific implementation of some kind of task.
  {
    $this->logger = $logger;
  }
  public function show()
  {
    $user = 'JohnDoe';
    // Log this information:
    $this->logger->execute($user);
  }
}

$controller = new UsersController(new LogToDat);
$controller->show(); //This sends a message to the logger.
*/

//..

/*
interface CastsToJson {  // Or Jsonable
  public function toJson();

}

class User implements CastsToJson {}
class Collection implements CastsToJson {}
*/
