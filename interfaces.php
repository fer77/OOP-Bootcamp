<?php

//Interfaces are like contracts: it lays down the terms for whatever implimentation must adhere to.

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

}

class LogToFile {
  public function execute($message)
  {
    var_dump('Log the message to a file: ' . $message);
  }
}

class LogToDatabase {
  public function execute($message)
  {
    var_dump('Log the message to a file');
  }
}

//...

class UsersController {

// Collaborators.

protected $logger;

  public function __construct(LogToFile $Logger) //Concrete class: specific implementation of some kind of task.
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

$controller = new UsersController(new LogToFile);
$controller->show(); //This sends a message to the logger.
