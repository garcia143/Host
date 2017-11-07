<?php

namespace Host\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Identical;

class PortalSignUp extends Form {

  public function initialize() {

    // Full name
    $fullname = new Text('fullname',
      [
        'class' => 'form-control'
      ]
    );

    $fullname->addValidators([
      new PresenceOf([
        'message' => 'Full name is required.'
      ])
    ]);

    $this->add($fullname);

    // Email Address
    $email = new Text('email',
      [
        'class' => 'form-control'
      ]
    );

    $email->addValidators([
      new PresenceOf([
        'message' => 'Email is required.'
      ])
    ]);

    $email->clear();

    $this->add($email);

    // Password
    $password = new Password('password',
      [
        'class' => 'form-control'
      ]
    );

    $password->addValidators([
      new PresenceOf([
        'message' => 'Password is required.'
      ])
    ]);

    $password->clear();

    $this->add($password);

    // Password Confirm
    $passconf = new Password('passconf',
      [
        'class' => 'form-control'
      ]
    );
    $passconf->clear();
    $this->add($passconf);

    // Phone Number
    $phonenumber = new Text('phonenumber',
      [
        'class' => 'form-control'
      ]
    );

    $phonenumber->clear();

    $this->add($phonenumber);

    // CSRF
    $_token = new Hidden('_token');

    $_token->addValidator(new Identical([
      'value' => $this->security->getSessionToken(),
      'message' => 'CSRF validation failed'
    ]));

    $_token->clear();

    $this->add($_token);

  }

  public function messages($name) {
    if ($this->hasMessagesFor($name)) {
      foreach ($this->getMessagesFor($name) as $message) {
        $this->flash->error($message);
      }
    }
  }

}
