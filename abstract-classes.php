<?php
//* Abstract Classes
//* Abstract Classes vs Interfaces

//* interface: Think of it as a contract.  Defines a public API, that any implementation needs to abide by.  No logic is stored in interfaces.  An interface is needed when you find yourself checking the type of an object in order to proceed, then leverage Polymorphism (Polymorphism): When our functions do not need to know specifics about what we are passing to them, they just need to know that what we are passing them offers them a method they expect.

interface Provider {
	public function authorize();
}
				//* We could be passing Github, facebook... it doesn't matter to our login function, as long as it provides an "authorize" method (in this example.)
function login(Provider $provider)
{
	$provider->authorize();
}

//* Abstract class: A class that can not be instantiated on its own.  Relies on inheritance.
abstract class Provider {
	//* Although we are building a class, noone is alowed to instanciate this.
	abstract protected getAuthUrl(); //* Requires and mandates that a subclass has to create and implement this method.
}

class FacebookProvider extends Provider {
	protected function getAuthUrl()
	{
		//* Each subclass has to give us their own version of this logic.
		return 'facebook url';
	}
}
class TwitterProvider extends Provider {
	protected function getAuthUrl()
	{
		//* Each subclass has to give us their own version of this logic.
		return 'twitter url';
	}
}