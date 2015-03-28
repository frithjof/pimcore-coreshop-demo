<?php

use Website\Controller\Action;

class DefaultController extends Action
{
    public function init()
    {
        parent::init();
    }

    public function defaultAction()
    {
        $this->_redirect($this->view->url(array("lang" => $this->language), "coreshop_index"));
    }
}
