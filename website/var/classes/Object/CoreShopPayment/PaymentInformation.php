<?php 

namespace Pimcore\Model\Object\CoreShopPayment;

class PaymentInformation extends \Pimcore\Model\Object\Objectbrick {



protected $brickGetters = array('CoreShopPaymentPayunity');


public $CoreShopPaymentPayunity = null;

/**
* @return \Pimcore\Model\Object\Objectbrick\Data\CoreShopPaymentPayunity
*/
public function getCoreShopPaymentPayunity() { 
   return $this->CoreShopPaymentPayunity; 
}

/**
* @param \Pimcore\Model\Object\Objectbrick\Data\CoreShopPaymentPayunity $CoreShopPaymentPayunity
* @return void
*/
public function setCoreShopPaymentPayunity ($CoreShopPaymentPayunity) {
	$this->CoreShopPaymentPayunity = $CoreShopPaymentPayunity;
	return $this;;
}

}

