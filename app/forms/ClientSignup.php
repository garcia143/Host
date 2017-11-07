<?php

namespace Host\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;

class ClientSignup extends Form {

  public function initialize() {

    // Full Name
    $fullname = new Text('fullname');
    $this->add($fullname);

    // Email Address
    $email = new Text('email');
    $email->clear();
    $this->add($email);

    // Password


    // Confirm password

    // Phone number
    $phonenumber = new Text('phonenumber');
    $this->add($phonenumber);

  }

}
