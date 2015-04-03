<?php 

/** Generated at 2015-03-28T14:45:25+01:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopOrder extends \CoreShop\Order {

public $o_classId = 32;
public $o_className = "CoreShopOrder";
public $lang;
public $items;
public $customer;
public $deliveryAddress;
public $billingAddress;
public $paymentProvider;
public $deliveryProvider;
public $deliveryFee;
public $payments;
public $extraInformation;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get lang - language
* @return string
*/
public function getLang () {
	$preValue = $this->preGetValue("lang"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lang;
	return $data;
}

/**
* Set lang - language
* @param string $lang
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setLang ($lang) {
	$this->lang = $lang;
	return $this;
}

/**
* Get items - Items
* @return array
*/
public function getItems () {
	$preValue = $this->preGetValue("items"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);
	return $data;
}

/**
* Set items - Items
* @param array $items
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

/**
* Get customer - Customer
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getCustomer () {
	$preValue = $this->preGetValue("customer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("customer")->preGetData($this);
	return $data;
}

/**
* Set customer - Customer
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $customer
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setCustomer ($customer) {
	$this->customer = $this->getClass()->getFieldDefinition("customer")->preSetData($this, $customer);
	return $this;
}

/**
* Get deliveryAddress - deliveryAddress
* @return string
*/
public function getDeliveryAddress () {
	$preValue = $this->preGetValue("deliveryAddress"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryAddress;
	return $data;
}

/**
* Set deliveryAddress - deliveryAddress
* @param string $deliveryAddress
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setDeliveryAddress ($deliveryAddress) {
	$this->deliveryAddress = $deliveryAddress;
	return $this;
}

/**
* Get billingAddress - billingAddress
* @return string
*/
public function getBillingAddress () {
	$preValue = $this->preGetValue("billingAddress"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->billingAddress;
	return $data;
}

/**
* Set billingAddress - billingAddress
* @param string $billingAddress
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setBillingAddress ($billingAddress) {
	$this->billingAddress = $billingAddress;
	return $this;
}

/**
* Get paymentProvider - paymentProvider
* @return string
*/
public function getPaymentProvider () {
	$preValue = $this->preGetValue("paymentProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentProvider;
	return $data;
}

/**
* Set paymentProvider - paymentProvider
* @param string $paymentProvider
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setPaymentProvider ($paymentProvider) {
	$this->paymentProvider = $paymentProvider;
	return $this;
}

/**
* Get deliveryProvider - deliveryProvider
* @return string
*/
public function getDeliveryProvider () {
	$preValue = $this->preGetValue("deliveryProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryProvider;
	return $data;
}

/**
* Set deliveryProvider - deliveryProvider
* @param string $deliveryProvider
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setDeliveryProvider ($deliveryProvider) {
	$this->deliveryProvider = $deliveryProvider;
	return $this;
}

/**
* Get deliveryFee - deliveryFee
* @return float
*/
public function getDeliveryFee () {
	$preValue = $this->preGetValue("deliveryFee"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryFee;
	return $data;
}

/**
* Set deliveryFee - deliveryFee
* @param float $deliveryFee
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setDeliveryFee ($deliveryFee) {
	$this->deliveryFee = $deliveryFee;
	return $this;
}

/**
* Get payments - Payment
* @return array
*/
public function getPayments () {
	$preValue = $this->preGetValue("payments"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("payments")->preGetData($this);
	return $data;
}

/**
* Set payments - Payment
* @param array $payments
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setPayments ($payments) {
	$this->payments = $this->getClass()->getFieldDefinition("payments")->preSetData($this, $payments);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getExtraInformation () {
	$data = $this->extraInformation;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\Pimcore\Model\Object\CoreShopOrder\ExtraInformation")) { 
			$data = new \Pimcore\Model\Object\CoreShopOrder\ExtraInformation($this, "extraInformation");
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
* Set extraInformation - extraInformation
* @param \Pimcore\Model\Object\Objectbrick $extraInformation
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setExtraInformation ($extraInformation) {
	$this->extraInformation = $this->getClass()->getFieldDefinition("extraInformation")->preSetData($this, $extraInformation);
	return $this;
}

protected static $_relationFields = array (
  'items' => 
  array (
    'type' => 'objects',
  ),
  'customer' => 
  array (
    'type' => 'href',
  ),
  'payments' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}
