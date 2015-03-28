<?php

namespace CoreShopCrossSelling;

use Pimcore\API\Plugin as PluginLib;
use CoreShopCrossSelling\Shop;

class Plugin extends PluginLib\AbstractPlugin implements PluginLib\PluginInterface {

    /**
     * @var CoreShopCrossSelling\Shop
     */
    private static $shop;
    
    public function preDispatch($e)
    {
        self::getShop()->attachEvents();
    }

    /**
     * @return CoreShopCrossSelling\Shop
     */
    public static function getShop() {
        if(!self::$shop) {
            self::$shop = new Shop();
        }
        return self::$shop;
    }
    
	public static function install (){
        // implement your own logic here
        
        if(class_exists("\CoreShop\Plugin"))
            return true;
	}
	
	public static function uninstall (){
        // implement your own logic here
        return true;
	}

	public static function isInstalled () {
        // implement your own logic here
        return true;
	}
}
