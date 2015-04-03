<?php

namespace CoreShopDeliveryPost;

use Pimcore\API\Plugin as PluginLib;

class Plugin  extends PluginLib\AbstractPlugin implements PluginLib\PluginInterface {

	public static function install() {
        return true;
	}
	
	public static function uninstall() {
        return true;
	}

	public static function isInstalled() {
        return class_exists("\CoreShop\Plugin");
	}

    /**
     * @var CoreShopDeliveryPost\Shop
     */
    private static $shop;
    
    public function preDispatch($e)
    {
        self::getShop()->attachEvents();
    }

    /**
     * @return CoreShopDeliveryPost\Shop
     */
    public static function getShop() {
        if(!self::$shop) {
            self::$shop = new Shop();
        }
        return self::$shop;
    }
}
