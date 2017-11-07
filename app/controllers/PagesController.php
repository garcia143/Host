<?php

class PagesController extends ControllerBase {

	public function initialize() {
		parent::initialize();



	}

	public function indexAction() {

		$this->view->setVar('pageTitle', $this->translate->_("PAGES@HOME_TITLE"));

	}

}
