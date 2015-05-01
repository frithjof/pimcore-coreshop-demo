<?php 

/** Generated at 2015-04-20T14:50:48+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object;



class CoreShopOrder extends \CoreShop\Model\Order {

public $o_classId = 32;
public $o_className = "CoreShopOrder";
public $orderDate;
public $lang;
public $items;
public $customer;
public $shippingAddress;
public $billingAddress;
public $paymentProvider;
public $shippingProvider;
public $discount;
public $shipping;
public $payments;
public $extraInformation;
public $cartRule;


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
* Get orderDate - Order Date
* @return \Pimcore\Date
*/
public function getOrderDate () {
	$preValue = $this->preGetValue("orderDate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderDate;
	return $data;
}

/**
* Set orderDate - Order Date
* @param \Pimcore\Date $orderDate
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setOrderDate ($orderDate) {
	$this->orderDate = $orderDate;
	return $this;
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
* Get shippingAddress - Shipping Address
* @return string
*/
public function getShippingAddress () {
	$preValue = $this->preGetValue("shippingAddress"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingAddress;
	return $data;
}

/**
* Set shippingAddress - Shipping Address
* @param string $shippingAddress
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setShippingAddress ($shippingAddress) {
	$this->shippingAddress = $shippingAddress;
	return $this;
}

/**
* Get billingAddress - Billing Address
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
* Set billingAddress - Billing Address
* @param string $billingAddress
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setBillingAddress ($billingAddress) {
	$this->billingAddress = $billingAddress;
	return $this;
}

/**
* Get paymentProvider - Payment Provider
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
* Set paymentProvider - Payment Provider
* @param string $paymentProvider
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setPaymentProvider ($paymentProvider) {
	$this->paymentProvider = $paymentProvider;
	return $this;
}

/**
* Get shippingProvider - Shipping Provider
* @return string
*/
public function getShippingProvider () {
	$preValue = $this->preGetValue("shippingProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shippingProvider;
	return $data;
}

/**
* Set shippingProvider - Shipping Provider
* @param string $shippingProvider
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setShippingProvider ($shippingProvider) {
	$this->shippingProvider = $shippingProvider;
	return $this;
}

/**
* Get discount - Discount
* @return float
*/
public function getDiscount () {
	$preValue = $this->preGetValue("discount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discount;
	return $data;
}

/**
* Set discount - Discount
* @param float $discount
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setDiscount ($discount) {
	$this->discount = $discount;
	return $this;
}

/**
* Get shipping - Shipping
* @return float
*/
public function getShipping () {
	$preValue = $this->preGetValue("shipping"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shipping;
	return $data;
}

/**
* Set shipping - Shipping
* @param float $shipping
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setShipping ($shipping) {
	$this->shipping = $shipping;
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

/**
* Get cartRule - Cart Rule
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getCartRule () {
	$preValue = $this->preGetValue("cartRule"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("cartRule")->preGetData($this);
	return $data;
}

/**
* Set cartRule - Cart Rule
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $cartRule
* @return \Pimcore\Model\Object\CoreShopOrder
*/
public function setCartRule ($cartRule) {
	$this->cartRule = $this->getClass()->getFieldDefinition("cartRule")->preSetData($this, $cartRule);
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
  'cartRule' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

