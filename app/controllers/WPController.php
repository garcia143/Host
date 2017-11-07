<?php

use Host\Forms\BlogCateAdd;

class WPController extends ControllerBase {

	public function initialize() {
		parent::initialize();

		// Template Settings


	}

	public function loginAction() {

	}

	public function dashboardAction() {
		$this->view->setVar('pageTitle', $this->translate->_('WORKPLACE@DASHBOARD_TITLE'));
	}

	public function addclientsAction() {
		$this->view->setVar('pageTitle', $this->translate->_('WORKPLACE@CLIENTS_ADD_TITLE'));
	}

	public function employeesAction() {

		 /* Page Title */
		$this->view->setVar('pageTitle', $this->translate->_('WORKPLACE@EMPLOYEES_TITLE'));

	}

	public function blogcateAction() {

		$this->view->setVar('pageTitle', $this->translate->_('WORKPLACE@BLOG_CATEGORY_TITLE'));

		$form = new BlogCateAdd();

		$this->view->setVar('form', $form);

	}

}
