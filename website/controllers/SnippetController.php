<?php

class SnippetController extends Website_Controller_Project
{
    public function init()
    {
        parent::init();
        
        if ($this->view->editmode) {
            $this->enableLayout();
            $this->setLayout("snippet");
        }
    }

    public function footerAction()
    {
    }

    public function textAction()
    {
    }
}
