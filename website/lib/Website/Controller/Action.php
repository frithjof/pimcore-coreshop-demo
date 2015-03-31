<?php

namespace Website\Controller;

use Pimcore;
use Pimcore\Controller\Action\Frontend;

class Action extends Frontend
{

    public $language;
    public $validLanguages;

    public function init()
    {
        parent::init();

        $config = Pimcore\Config::getSystemConfig();
        $this->validLanguages = explode(",", $config->general->validLanguages);

        $this->view->headTitle()->setSeparator(" ".("|")." ");

        if (\Zend_Registry::isRegistered("Zend_Locale")) {
            $locale = \Zend_Registry::get("Zend_Locale");
        } else {
            $locale = new \Zend_Locale();

            if (!in_array($locale->getLanguage(), $this->validLanguages)) {
                $locale = new \Zend_Locale("en_EN");
            }

            \Zend_Registry::set("Zend_Locale", $locale);
        }

        $this->view->language = $locale->getLanguage();
        $this->language = $locale->getLanguage();

        $this->view->addHelperPath(PIMCORE_WEBSITE_PATH . '/lib/Website/Helper/View', 'Website\Helper\View');
        
        $this->addScriptAndCss();
        $this->enableLayout();
    }
    
    public function addScriptAndCss()
    {
        $this->view->headScript()->appendFile('/static/js/holder.js', 'text/javascript');
        $this->view->headScript()->appendFile('/plugins/Bootstrap/static/js/bootstrap.min.js', 'text/javascript');
        
        $this->view->headLink()->appendStylesheet('/plugins/Bootstrap/static/css/bootstrap.min.css', 'screen');
        $this->view->headLink()->appendStylesheet('/static/css/bootstrap-theme.css', 'screen');
    }
}
