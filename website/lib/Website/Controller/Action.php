<?php

class Website_Controller_Action extends Pimcore_Controller_Action_Frontend
{

    public $language;
    public $validLanguages;

    public function init()
    {
        parent::init();

        $config = Pimcore_Config::getSystemConfig();
        $this->validLanguages = explode(",", $config->general->validLanguages);

        if (Zend_Registry::isRegistered("Zend_Locale")) {
            $locale = Zend_Registry::get("Zend_Locale");
        } else {
            $locale = new Zend_Locale();

            if (!in_array($locale->getLanguage(), $this->validLanguages)) {
                $locale = new Zend_Locale("de_AT");
            }

            Zend_Registry::set("Zend_Locale", $locale);
        }

        $this->view->language = $locale->getLanguage();
        $this->language = $locale->getLanguage();

        $this->view->addHelperPath(PIMCORE_WEBSITE_PATH . '/lib/Website/Helper/View', 'Website_Helper_View');
        
        $this->addScriptAndCss();
        
        if ($this->document instanceof Document_Page) 
        {
            $this->enableLayout();
            $this->view->layout()->setLayout('layout');
            
            $this->view->headTitle()->setSeparator(" " . ("|") . " ");

            if (strlen($this->view->document->getDescription()) > 0) {
                $this->view->headMeta()->appendName('description', $this->document->getDescription());
            }
            
            if (strlen($this->document->getKeywords()) > 0) {
                $this->view->headMeta()->appendName('keywords', $this->document->getKeywords());
            }
            
            if (strlen($this->document->getTitle()) > 0) {
                $this->view->headTitle($this->view->document->getTitle());
            }
        
            if (!$this->view->document instanceof Document || $this->view->document->getFullPath() == "/") {
                $this->_redirect("/" . $this->view->language, array("code" => 301));
            }
        }
        
        $this->view->addScriptPath(PIMCORE_PLUGINS_PATH . "/Bootstrap/views/scripts");
    }
    
    public function addScriptAndCss()
    {
        $this->view->headScript()->appendFile('/static/js/holder.js', 'text/javascript');
        $this->view->headScript()->appendFile('/plugins/Bootstrap/static/js/bootstrap.min.js', 'text/javascript');
        
        $this->view->headLink()->appendStylesheet('/plugins/Bootstrap/static/css/bootstrap.min.css', 'screen');
        $this->view->headLink()->appendStylesheet('/static/css/bootstrap-theme.css', 'screen');
    }
}
