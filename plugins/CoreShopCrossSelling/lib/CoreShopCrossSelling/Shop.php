<?php

namespace CoreShopCrossSelling;

use CoreShop\Model\Plugin\Hook;

use Pimcore\Model\Object;
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

        $view = new \Pimcore\View();
        $view->brick = $this;
        
        $view->setScriptPath(
            array(
                PIMCORE_PLUGINS_PATH . '/CoreShopCrossSelling/views/scripts',
                PIMCORE_WEBSITE_PATH . '/views/scripts/coreshop/plugin/',
            )
        );

        $view->products = $this->getCrossSellingProducts($this->view->product);
        $view->registerHelper(new \Pimcore\View\Helper\Url(), "url");
        $view->language = $params['language'];

        return $view->render("crossselling/view.php");
    }

    protected function getCrossSellingProducts($baseProduct)
    {
        $orderItems = new Object\CoreShopOrderItem\Listing();
        $orderItems->setCondition("product__id = ?", array($baseProduct->getId()));

        $orders = array();
        $products = array();

        foreach($orderItems->getObjects() as $orderItem)
        {
            if(count($orderItem->getOrder()->getItems()) > 0 && !in_array($orderItem->getOrder()->getId(), $orders))
                $orders[$orderItem->getOrder()->getId()] = $orderItem->getOrder();
        }

        if(count($orders) > 0)
        {
            foreach($orders as $order)
            {
                foreach($order->getItems() as $item)
                {
                    if(!in_array($item->getProduct()->getId(), $products) && $item->getProduct()->getId() != $baseProduct->getId())
                    {
                        $products[$item->getProduct()->getId()] = $item->getProduct();
                    }
                }
            }
        }

        return $products;
    }
}