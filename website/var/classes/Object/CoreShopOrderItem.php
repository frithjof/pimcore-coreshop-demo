<?php 

/** Generated at 2015-03-28T14:45:12+01:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopOrderItem extends \CoreShop\Model\OrderItem {

public $o_classId = 30;
public $o_className = "CoreShopOrderItem";
public $product;
public $wholesalePrice;
public $retailPrice;
public $tax;
public $price;
public $amount;
public $extraInformation;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get product - Product
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
* Set product - Product
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $product
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setProduct ($product) {
	$this->product = $this->getClass()->getFieldDefinition("product")->preSetData($this, $product);
	return $this;
}

/**
* Get wholesalePrice - wholesalePrice
* @return float
*/
public function getWholesalePrice () {
	$preValue = $this->preGetValue("wholesalePrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wholesalePrice;
	return $data;
}

/**
* Set wholesalePrice - wholesalePrice
* @param float $wholesalePrice
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setWholesalePrice ($wholesalePrice) {
	$this->wholesalePrice = $wholesalePrice;
	return $this;
}

/**
* Get retailPrice - retailPrice
* @return float
*/
public function getRetailPrice () {
	$preValue = $this->preGetValue("retailPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->retailPrice;
	return $data;
}

/**
* Set retailPrice - retailPrice
* @param float $retailPrice
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setRetailPrice ($retailPrice) {
	$this->retailPrice = $retailPrice;
	return $this;
}

/**
* Get tax - tax
* @return float
*/
public function getTax () {
	$preValue = $this->preGetValue("tax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tax;
	return $data;
}

/**
* Set tax - tax
* @param float $tax
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setTax ($tax) {
	$this->tax = $tax;
	return $this;
}

/**
* Get price - Price
* @return float
*/
public function getPrice () {
	$preValue = $this->preGetValue("price"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price;
	return $data;
}

/**
* Set price - Price
* @param float $price
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setPrice ($price) {
	$this->price = $price;
	return $this;
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
* @return \Pimcore\Model\Object\CoreShopOrderItem
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getExtraInformation () {
	$data = $this->extraInformation;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\Pimcore\Model\Object\CoreShopOrderItem\ExtraInformation")) { 
			$data = new \Pimcore\Model\Object\CoreShopOrderItem\ExtraInformation($this, "extraInformation");
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
* Set extraInformation - Extra
* @param \Pimcore\Model\Object\Objectbrick $extraInformation
* @return \Pimcore\Model\Object\CoreShopOrderItem
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

