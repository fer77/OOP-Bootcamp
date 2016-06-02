<?php

//Interface is like a contract: Whenever you find yourself checking the type of an object in order to proceed you should be levereging against polymorphysim.
/*
interface Provider {
  public function authorize();
}

function login(Provider $provider) {
  $provider->authorize(); //polymorphysim: the function doesn't need to know what provider we have, only that the object we feed adheres to the provider method and offers an authorized method.
}
*/

//Abstract class: a class that can't be instanciated on its own: Must create a subclass and leverage inheritance.

abstract class Provider { //No one is allowed to instanciate this.
  abstract protected function getAuthorizationUrl(); //You can create abstract protected methods, which enforce the "contracts" sublcasses abide by.
}

class FacebookProvider extends Provider { //Require and mandate that a sublcass creates and implements this method.
  /*
  class FacebookProvider implements Provider, blah bla, ... { we can "implements" difrent numbers of "contracts", however PHP does not allow for multiple inheritances, so we are limited.
  */

protected function getAuthorizationUrl() {
  return '' //A URL create another provider and return a difrent URL.
  }
}
