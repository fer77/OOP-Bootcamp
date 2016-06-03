<?php namespace Acme;

class RegisterUser {
  public function execute(array $data, RespondsToUserRegistration $listener) { //Can be an array or object
    var_dump('Registering user.');
    // We need to register AuthController:
    // pass ([], $this) to execute (line 17).
    $listener->userRegisteredSuccess(); // A "contract" needs to be enforced here (interface).
  }
}
