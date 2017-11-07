<?php

use Host\Forms\PortalSignUp;
use Host\Models\Users;

class PortalController extends ControllerBase {

	public function signinAction() {

	}

	public function signupAction() {
		$this->view->setVar('pageTitle', $this->translate->_('PORTAL@SIGNIN_TITLE'));

		$form = new PortalSignUp();

		if ($this->request->isPost()) {
			if ($form->isValid($this->request->getPost()) != false) {

			}
		}

		$this->view->setVar('form', $form);
	}

}
