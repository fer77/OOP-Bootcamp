<?php

/*
 * CLASSES
 */

class Task {
	public $description;  //Think of this as a property and not a variable.

	public $completed = false;

	public function __construct($description) {
		//Special method that will be called immediately when you instantiate a new class.  When you create a new Task(), the contents of this method will fire.
		//var_dump($description);
		$this->description = $description; //$this refers to "this" object or instance of our class.
	}

	public function complete() {
		$this->completed = true;
	}
}

$task = new Task("Learn OOP");
//$task2 = new Task("Pick up groceries");

$task->complete();

// var_dump($task->description);
// var_dump($task2->description);
var_dump($task->completed);