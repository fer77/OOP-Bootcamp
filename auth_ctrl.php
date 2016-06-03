<?php

// If the only place that a dependency will be referenced is in a single controller method, use method injection.  Other wise if the object will be referenced in multiple places of your class, use constructor injection.

class AuthController {
  // Method injection: passes a dependency into a method.
  public function register(RegisterUser $registration) {
    $registration->execute();
  }
  // Constructor injection:
  public function __constructor(RegisterUser $registration) {
    $this->registration = $registration;
  }
  public function register() {
    $this->registration->execute();
  }
}
