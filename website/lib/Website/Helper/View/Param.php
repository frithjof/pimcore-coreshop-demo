<?php

namespace Website\Helper\View;

class Param
{
    public $view;

    public function setView(\Zend_View_Interface $view)
    {
        $this->view = $view;
    }

    public function param($param, $defaultValue = null)
    {
        $value = $this->view->$param;

        if (!isset($value) && isset($defaultValue)) {
            $value = $defaultValue;
        }

        return $value;
    }
}
