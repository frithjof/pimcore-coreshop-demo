<?php 

/** Generated at 2015-04-10T10:44:45+02:00 */

/**
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class CoreShopProductSpecificPrice extends Object\Fieldcollection\Data\AbstractData  {

public $type = "CoreShopProductSpecificPrice";
public $customers;
public $currency;
public $countries;
public $from;
public $to;
public $fromQuantity;
public $price;
public $reduction;
public $reductionType;


/**
* Get customers - Customers
* @return array
*/
public function getCustomers () {
	$data = $this->getDefinition()->getFieldDefinition("customers")->preGetData($this);
	 return $data;
}

/**
* Get customers - Customers
* @param array $customers
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setCustomers ($customers) {
	$this->customers = $this->getDefinition()->getFieldDefinition("customers")->preSetData($this, $customers);
	return $this;
}

/**
* Get currency - Currency
* @return array
*/
public function getCurrency () {
	$data = $this->getDefinition()->getFieldDefinition("currency")->preGetData($this);
	 return $data;
}

/**
* Get currency - Currency
* @param array $currency
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setCurrency ($currency) {
	$this->currency = $this->getDefinition()->getFieldDefinition("currency")->preSetData($this, $currency);
	return $this;
}

/**
* Get countries - Countries
* @return array
*/
public function getCountries () {
	$data = $this->getDefinition()->getFieldDefinition("countries")->preGetData($this);
	 return $data;
}

/**
* Get countries - Countries
* @param array $countries
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setCountries ($countries) {
	$this->countries = $this->getDefinition()->getFieldDefinition("countries")->preSetData($this, $countries);
	return $this;
}

/**
* Get from - From
* @return \Pimcore\Date
*/
public function getFrom () {
	$data = $this->from;
	 return $data;
}

/**
* Get from - From
* @param \Pimcore\Date $from
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
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
	$data = $this->to;
	 return $data;
}

/**
* Get to - To
* @param \Pimcore\Date $to
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setTo ($to) {
	$this->to = $to;
	return $this;
}

/**
* Get fromQuantity - From Quantity
* @return float
*/
public function getFromQuantity () {
	$data = $this->fromQuantity;
	 return $data;
}

/**
* Get fromQuantity - From Quantity
* @param float $fromQuantity
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setFromQuantity ($fromQuantity) {
	$this->fromQuantity = $fromQuantity;
	return $this;
}

/**
* Get price - Price (excl. Tax)
* @return float
*/
public function getPrice () {
	$data = $this->price;
	 return $data;
}

/**
* Get price - Price (excl. Tax)
* @param float $price
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setPrice ($price) {
	$this->price = $price;
	return $this;
}

/**
* Get reduction - Discount
* @return float
*/
public function getReduction () {
	$data = $this->reduction;
	 return $data;
}

/**
* Get reduction - Discount
* @param float $reduction
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setReduction ($reduction) {
	$this->reduction = $reduction;
	return $this;
}

/**
* Get reductionType - Typ
* @return string
*/
public function getReductionType () {
	$data = $this->reductionType;
	 return $data;
}

/**
* Get reductionType - Typ
* @param string $reductionType
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setReductionType ($reductionType) {
	$this->reductionType = $reductionType;
	return $this;
}

}

