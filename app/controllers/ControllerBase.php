<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

  public function beforeExecuteRoute() {

    /**
     * Language Cookie
     */
     if (!$this->cookies->has('language')) {
       $this->cookies->set('language', $this->config->application->defaultLang, time() + 90 * 86400);
     } else {
       if (!in_array($this->cookies->get('language'), $this->config->application->langAvailable->toArray())) {
         $this->cookies->set('language', $this->config->application->defaultLang, time() + 90 * 86400);
       }
     }

  }

  public function initialize() {

    // Template Settings
    $this->view->setVar('currentLang', $this->cookies->get('language'));
    $this->view->setVar('appName', $this->config->application->appName);

  }

}
