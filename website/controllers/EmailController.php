<?php

use Website\Controller\Action;

class EmailController extends Action
{
    public function init()
    {
        parent::init();

        //$this->view->layout()->setLayout('email');
    }

    public function contactAction()
    {
        $this->view->data = $this->_getParam("data", array());
    }

    public function emailAction()
    {
    }
}
