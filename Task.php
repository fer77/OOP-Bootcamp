<?php
//* "Hunt down the nouns" when building a class.
 class Task //* Think of this as a "blue print".
 {
 	//public $description = 'Go to store'; //* Think of this as less of a variable and more of a property.
 	//* "public" outside of this class anyone can have access to this property.
 	public $description;

 	public $title;

 	public $completed = false;

 	//* method, a function inside a class.
 	public function __construct($title, $description)
 	{
 		//* Whenever you create a "new Task" the contents here will fire.
 		//var_dump("Called");
 		//var_dump($description);
 		$this->title = $title;
 		$this->description = $description; //* This assigns the value passed through our object to our property.
 		//* "this" refers to this instance of our class.
 	}
 	public function complete()
 	{
 		$this->completed = true;
 	}
 	
 } 
 //* To access the values of this class (public $description) create a new instance of this class.  We refer to these instances as objects:
 	$task = new Task('Learn OOP', 'Watch more laracasts');  //* If our class is a "blue print" think of our objects as being able to have slightly difrent make up.
 					//* Assign this value to the $description property like this: $this->description = $description;
 	$task2 = new Task('Pick up groceries', 'Bannanas, apples...');
 //* and access the value like this:
 	//var_dump($task->description);
 	//var_dump($task2->description);
 	var_dump($task);
 	//var_dump($task->completed);
 	//* To mark a task as completed:
 	//$task->complete(); //* We call a method.
 	//var_dump($task->completed);
 ?>