<?php

namespace CoreShopCrossSelling;

use CoreShop\Plugin\Hook;

use Pimcore\Model\Object\CoreShopProduct;
    
class Shop implements Hook
{
    public function attachEvents()
    {
        \CoreShop\Plugin::getEventManager()->attach("hook.product-detail-bottom", function($e) {
            return $this;
        });
    }
    
    public function getName()
    {
        return "CrossSelling";
    }
    
    public function getDescription()
    {
        return "CrossSelling for CoreShop";
    }
    
    public function getImage()
    {
        return "";
    }
    
    public function getIdentifier()
    {
        return "hook_coreshop_crossselling";
    }
    
    public function render(array $params)
    {
        $this->view->product = $params['product'];
        
        $view = new \Zend_View();
        $view->brick = $this;
        
        $view->setScriptPath(
            array(
                PIMCORE_PLUGINS_PATH . '/CoreShopCrossSelling/views/scripts',
                PIMCORE_WEBSITE_PATH . '/views/scripts/coreshop/plugin/',
            )
        );

        return $view->render("crossselling/view.php");
        return "ANY SHIT";
    }
}