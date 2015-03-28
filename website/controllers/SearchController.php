<?php

class SearchController extends Website_Controller_Project
{
    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $this->view->page = $this->_getParam("page", 1);
        $this->view->query = $this->_getParam("search", null);

        if (!$this->view->query) {
            $this->view->query =  $this->_getParam("query");
        }
    }
}
