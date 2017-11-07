<?php

namespace Host\Forms;

use Phalcon\Forms\Form;

class PortalSignIn extends Form {

  public function initialize() {

    // Email Address
    $email = new Text('email');
    $email->clear();

    // Password
    $password = new Password('password');
    $password->clear();

  }

}
