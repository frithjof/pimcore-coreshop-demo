<?php 

/** Generated at 2015-03-31T14:38:26+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          178.189.232.59
*/


namespace Pimcore\Model\Object;



class CoreShopCartItem extends \CoreShop\CartItem {

public $o_classId = 28;
public $o_className = "CoreShopCartItem";
public $amount;
public $product;
public $extraInformation;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCartItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get amount - amount
* @return float
*/
public function getAmount () {
	$preValue = $this->preGetValue("amount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->amount;
	return $data;
}

/**
* Set amount - amount
* @param float $amount
* @return \Pimcore\Model\Object\CoreShopCartItem
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

/**
* Get product - Produkt
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getProduct () {
	$preValue = $this->preGetValue("product"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("product")->preGetData($this);
	return $data;
}

/**
* Set product - Produkt
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $product
* @return \Pimcore\Model\Object\CoreShopCartItem
*/
public function setProduct ($product) {
	$this->product = $this->getClass()->getFieldDefinition("product")->preSetData($this, $product);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getExtraInformation () {
	$data = $this->extraInformation;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\Pimcore\Model\Object\CoreShopCartItem\ExtraInformation")) { 
			$data = new \Pimcore\Model\Object\CoreShopCartItem\ExtraInformation($this, "extraInformation");
			$this->extraInformation = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("extraInformation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set extraInformation - Extra Information
* @param \Pimcore\Model\Object\Objectbrick $extraInformation
* @return \Pimcore\Model\Object\CoreShopCartItem
*/
public function setExtraInformation ($extraInformation) {
	$this->extraInformation = $this->getClass()->getFieldDefinition("extraInformation")->preSetData($this, $extraInformation);
	return $this;
}

protected static $_relationFields = array (
  'product' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

