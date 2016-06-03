<?php

$registration = new Acme\RegisterUser;
//AuthController requires our __constructor.
$authController = new Acme\AuthController($registration);

$authController->register();
