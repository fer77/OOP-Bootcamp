<?php

//* An interface is a contract.  There is no real logic, within an interface, it is abstract.  It lays down the terms for whatever implemantation must adhere to.

//* 1
//interface Animal {
	//* Things "animals" share in common (concrete implimentation):
//	public function communicate(); //* No {} necause there is no logic (function) that goes in here.
//}

// class Dog implements Animal {
// 	public function communicate()
// 	{
// 		return 'bark';
// 	}

// 	class Cat implements Animal {
// 	public function communicate()
// 	{
// 		return 'meow';
// 	}
// }

//* 2
interface Logger {
	//* Polymorphism and Strategy Pattern.
	//* If there are ever classes, tasks, multiple implementations, or diffrent methods for executing tasks or behavior, that is a sign that we need to create an interface.
	public function execute($message);
}
						//* implements: adhere to our "contract" (interface).
class LogToFile implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a file: ' . $message);
	}
}
						//* implements: adhere to our "contract" (interface).
	class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a database: ' . $message);
	}
}
//...
class UserController {
	//* If this class depends on a logging "mechanism" it needs to be accepted in a contsructor:
								//* Program to an interface, not to an implementation.
	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'Bob';

		//* log this information
		$this->logger->execute($user); //* This reperesents our message.
	}
}

//* New up controller and pass the 'LogToFile' class and save it to a variable
// $controller = new UserController(new LogToFile);
//$controller = new UserController(new LogToDatabase);

$controller->show(); //* This sends a message to the logger.

//* 3
interface Jsonable {
	public function toJson();
}

//* Diffrent classes that adhere to the same "contract"
class User implements CastsToJson {}
class Collection implements CastsToJson {}

//* 4
class Repository {
	public function save($data);
}

class MongoRepository implements Repository {
	public function save($data)
	{
		# code...
	}
}

class MysqlDatabase implements Repository {
	public function save($data)
	{
		# code...
	}
}