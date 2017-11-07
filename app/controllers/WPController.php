<?php

class WPController extends ControllerBase {

	public function initialize() {
		parent::initialize();

		// Template Settings


	}

	public function loginAction() {

	}

	public function dashboardAction() {

	}

	public function employeesAction() {
		
		 /* Page Title */
		$this->view->setVar('pageTitle', $this->translate->_('WORKPLACE@EMPLOYEES_TITLE'));

	}

}
