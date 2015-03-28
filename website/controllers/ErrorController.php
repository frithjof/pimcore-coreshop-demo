<?php

use Website\Controller\Action;

class ErrorController extends Action
{
    public function errorAction()
    {
        $this->_redirect("/");
    }
}
