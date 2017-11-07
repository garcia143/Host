<?php

namespace Host\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;

class BlogCateAdd extends Form {

  public function initialize() {

    /**
     * Title
     */
    $name = new Text('name',
      [
        'class' => 'form-control'
      ]
    );

    $this->add($name);

  }

}
