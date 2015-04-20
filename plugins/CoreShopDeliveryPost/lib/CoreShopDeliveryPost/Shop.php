<?php

namespace CoreShopDeliveryPost;

use CoreShop\Model\Plugin\Shipping;

class Shop implements Shipping
{
    public function attachEvents()
    {
        \CoreShop\Plugin::getEventManager()->attach("shipping.getProvider", function($e) {
            return $this;
        });
    }
    
    public function getName()
    {
        return "Post.at";
    }
    
    public function getDescription()
    {
        return "Post liefert allen was.";
    }
    
    public function getImage()
    {
        return "/plugins/CoreShopDeliveryPost/static/img/logo_responsive.png";
    }
    
    public function getIdentifier()
    {
        return "delivery_post";
    }
    
    public function getShipping(\Pimcore\Model\Object\CoreShopCart $cart)
    {
        $maxDelivery = 0;
        
        foreach($cart->getItems() as $item)
        {
            $deliveryForItem = $this->getShippingForItem($item);
            
            if($deliveryForItem > $maxDelivery)
                $maxDelivery = $deliveryForItem;
        }
        
        return $maxDelivery;
    }
    
    protected function getShippingForItem(\Pimcore\Model\Object\CoreShopCartItem $item)
    {
        $product = $item->getProduct();

        /*
            Standardbrief C5 / C6 max.                      23,5 x 16,2 x 0,5 cm    bis 20 g    EUR 0,68
            Brief Maxi C4 max.                              32,4 x 22,9 x 2 cm      bis 500 g   EUR 1,60
            Großbrief L max. 50 cm / L + B + H max.         90 cm	                bis 2 kg    EUR 4,00
            Standardpaket 100 cm L max. 100 cm / L + 2B + 2H max. 360 cm	        bis 2 kg	EUR 4,60
            Standardpaket 100 cm L max. 100 cm / L + 2B + 2H max. 360 cm	        2-4 kg      EUR 5,80
            EMS Standardsendung 100 cm	L max. 100 cm / L + 2B + 2H max. 360 cm	    bis 2 kg    EUR 9,92
            Online Paketmarke PM 45 45 cm (Längste + kürzeste Seite bis max. )      bis 31,5 kg EUR 3,90
        */
        
        $height = $product->getHeight();
        $width = $product->getWidth();
        $length = $product->getLength();
        $weight = $product->getWeight();

        if($length <= 235 && $width <= 162 && $height <= 5 && $weight <= 20)
        {
            return 0.68;
        }
        
        if($length <= 234 && $width <= 229 && $height <= 20 && $weight <= 500)
        {
            return 1.60;
        }
        
        if($length <= 500 && ($length + $width + $height) <= 900 && $weight < 2000)
        {
            return 4;
        }
        
        return false;
    }
}