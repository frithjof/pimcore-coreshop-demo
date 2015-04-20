<?php 

/** Generated at 2015-04-15T15:14:23+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          91.141.2.36
*/


namespace Pimcore\Model\Object;



class CoreShopCartRule extends \CoreShop\Model\CartRule {

public $o_classId = 36;
public $o_className = "CoreShopCartRule";
public $name;
public $description;
public $code;
public $highlight;
public $priority;
public $customer;
public $from;
public $to;
public $minAmount;
public $minAmountCurrency;
public $totalAvailable;
public $totalUsed;
public $totalPerCustomer;
public $countries;
public $products;
public $freeShipping;
public $discountType;
public $freeGift;
public $discountAmount;
public $discountAmountCurrency;
public $discountAmountTax;
public $discountPercent;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get description - Description
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->description;
	return $data;
}

/**
* Set description - Description
* @param string $description
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* Get code - Code
* @return string
*/
public function getCode () {
	$preValue = $this->preGetValue("code"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->code;
	return $data;
}

/**
* Set code - Code
* @param string $code
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setCode ($code) {
	$this->code = $code;
	return $this;
}

/**
* Get highlight - Highlight
* @return boolean
*/
public function getHighlight () {
	$preValue = $this->preGetValue("highlight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->highlight;
	return $data;
}

/**
* Set highlight - Highlight
* @param boolean $highlight
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setHighlight ($highlight) {
	$this->highlight = $highlight;
	return $this;
}

/**
* Get priority - Priority
* @return float
*/
public function getPriority () {
	$preValue = $this->preGetValue("priority"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->priority;
	return $data;
}

/**
* Set priority - Priority
* @param float $priority
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setPriority ($priority) {
	$this->priority = $priority;
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
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setCustomer ($customer) {
	$this->customer = $this->getClass()->getFieldDefinition("customer")->preSetData($this, $customer);
	return $this;
}

/**
* Get from - From
* @return \Pimcore\Date
*/
public function getFrom () {
	$preValue = $this->preGetValue("from"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->from;
	return $data;
}

/**
* Set from - From
* @param \Pimcore\Date $from
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setFrom ($from) {
	$this->from = $from;
	return $this;
}

/**
* Get to - To
* @return \Pimcore\Date
*/
public function getTo () {
	$preValue = $this->preGetValue("to"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->to;
	return $data;
}

/**
* Set to - To
* @param \Pimcore\Date $to
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setTo ($to) {
	$this->to = $to;
	return $this;
}

/**
* Get minAmount - Minimum Amount
* @return float
*/
public function getMinAmount () {
	$preValue = $this->preGetValue("minAmount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->minAmount;
	return $data;
}

/**
* Set minAmount - Minimum Amount
* @param float $minAmount
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setMinAmount ($minAmount) {
	$this->minAmount = $minAmount;
	return $this;
}

/**
* Get minAmountCurrency - Currency
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getMinAmountCurrency () {
	$preValue = $this->preGetValue("minAmountCurrency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("minAmountCurrency")->preGetData($this);
	return $data;
}

/**
* Set minAmountCurrency - Currency
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $minAmountCurrency
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setMinAmountCurrency ($minAmountCurrency) {
	$this->minAmountCurrency = $this->getClass()->getFieldDefinition("minAmountCurrency")->preSetData($this, $minAmountCurrency);
	return $this;
}

/**
* Get totalAvailable - Total Available
* @return float
*/
public function getTotalAvailable () {
	$preValue = $this->preGetValue("totalAvailable"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalAvailable;
	return $data;
}

/**
* Set totalAvailable - Total Available
* @param float $totalAvailable
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setTotalAvailable ($totalAvailable) {
	$this->totalAvailable = $totalAvailable;
	return $this;
}

/**
* Get totalUsed - Total Used
* @return float
*/
public function getTotalUsed () {
	$preValue = $this->preGetValue("totalUsed"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalUsed;
	return $data;
}

/**
* Set totalUsed - Total Used
* @param float $totalUsed
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setTotalUsed ($totalUsed) {
	$this->totalUsed = $totalUsed;
	return $this;
}

/**
* Get totalPerCustomer - Total per Customer
* @return float
*/
public function getTotalPerCustomer () {
	$preValue = $this->preGetValue("totalPerCustomer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalPerCustomer;
	return $data;
}

/**
* Set totalPerCustomer - Total per Customer
* @param float $totalPerCustomer
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setTotalPerCustomer ($totalPerCustomer) {
	$this->totalPerCustomer = $totalPerCustomer;
	return $this;
}

/**
* Get countries - Countries
* @return array
*/
public function getCountries () {
	$preValue = $this->preGetValue("countries"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("countries")->preGetData($this);
	return $data;
}

/**
* Set countries - Countries
* @param array $countries
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setCountries ($countries) {
	$this->countries = $this->getClass()->getFieldDefinition("countries")->preSetData($this, $countries);
	return $this;
}

/**
* Get products - Products
* @return array
*/
public function getProducts () {
	$preValue = $this->preGetValue("products"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("products")->preGetData($this);
	return $data;
}

/**
* Set products - Products
* @param array $products
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setProducts ($products) {
	$this->products = $this->getClass()->getFieldDefinition("products")->preSetData($this, $products);
	return $this;
}

/**
* Get freeShipping - Free Shipping
* @return boolean
*/
public function getFreeShipping () {
	$preValue = $this->preGetValue("freeShipping"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->freeShipping;
	return $data;
}

/**
* Set freeShipping - Free Shipping
* @param boolean $freeShipping
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setFreeShipping ($freeShipping) {
	$this->freeShipping = $freeShipping;
	return $this;
}

/**
* Get discountType - Discount Type
* @return string
*/
public function getDiscountType () {
	$preValue = $this->preGetValue("discountType"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountType;
	return $data;
}

/**
* Set discountType - Discount Type
* @param string $discountType
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDiscountType ($discountType) {
	$this->discountType = $discountType;
	return $this;
}

/**
* Get freeGift - Free Gift
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getFreeGift () {
	$preValue = $this->preGetValue("freeGift"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("freeGift")->preGetData($this);
	return $data;
}

/**
* Set freeGift - Free Gift
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $freeGift
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setFreeGift ($freeGift) {
	$this->freeGift = $this->getClass()->getFieldDefinition("freeGift")->preSetData($this, $freeGift);
	return $this;
}

/**
* Get discountAmount - Amount
* @return float
*/
public function getDiscountAmount () {
	$preValue = $this->preGetValue("discountAmount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountAmount;
	return $data;
}

/**
* Set discountAmount - Amount
* @param float $discountAmount
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDiscountAmount ($discountAmount) {
	$this->discountAmount = $discountAmount;
	return $this;
}

/**
* Get discountAmountCurrency - Currency
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getDiscountAmountCurrency () {
	$preValue = $this->preGetValue("discountAmountCurrency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("discountAmountCurrency")->preGetData($this);
	return $data;
}

/**
* Set discountAmountCurrency - Currency
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $discountAmountCurrency
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDiscountAmountCurrency ($discountAmountCurrency) {
	$this->discountAmountCurrency = $this->getClass()->getFieldDefinition("discountAmountCurrency")->preSetData($this, $discountAmountCurrency);
	return $this;
}

/**
* Get discountAmountTax - Tax
* @return string
*/
public function getDiscountAmountTax () {
	$preValue = $this->preGetValue("discountAmountTax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountAmountTax;
	return $data;
}

/**
* Set discountAmountTax - Tax
* @param string $discountAmountTax
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDiscountAmountTax ($discountAmountTax) {
	$this->discountAmountTax = $discountAmountTax;
	return $this;
}

/**
* Get discountPercent - Percent
* @return float
*/
public function getDiscountPercent () {
	$preValue = $this->preGetValue("discountPercent"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->discountPercent;
	return $data;
}

/**
* Set discountPercent - Percent
* @param float $discountPercent
* @return \Pimcore\Model\Object\CoreShopCartRule
*/
public function setDiscountPercent ($discountPercent) {
	$this->discountPercent = $discountPercent;
	return $this;
}

protected static $_relationFields = array (
  'customer' => 
  array (
    'type' => 'href',
  ),
  'minAmountCurrency' => 
  array (
    'type' => 'href',
  ),
  'countries' => 
  array (
    'type' => 'objects',
  ),
  'products' => 
  array (
    'type' => 'objects',
  ),
  'freeGift' => 
  array (
    'type' => 'href',
  ),
  'discountAmountCurrency' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

