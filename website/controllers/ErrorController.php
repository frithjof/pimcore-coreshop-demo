<?php

class ErrorController extends Website_Controller_Project
{
    public function errorAction()
    {
        $this->_redirect("/");
    }
}
