<?php namespace Acme;

interface RespondsToUserRegistration {
  // Terms of "contract":
  public function userRegisteredSuccess();

  public function userRegisteredFailed();
}
