<?php namespace Acme;

// If the only place that a dependency will be referenced is in a single controller method, use method injection.  Other wise if the object will be referenced in multiple places of your class, use constructor injection.

class AuthController implements RespondsToUserRegistration {
  protected $registration;
/*
  // Method injection: passes a dependency into a method.
  public function register(RegisterUser $registration) {
    $registration->execute();
  }
  */
  // Constructor injection:
  public function __constructor(RegisterUser $registration) {
    $this->registration = $registration;
  }
  public function register() {
    $this->registration->execute([], $this);
  }
  // Something needs to be returned:
  public function userRegisteredSuccess() {
    var_dump('created successfully, redirect somewhere.');
  }

  public function userRegisteredFailed()
  {
    var_dump('created unsuccessfully, redirect back.');
  }
}
