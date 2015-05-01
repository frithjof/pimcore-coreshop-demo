<?php 

/** Generated at 2015-05-01T14:40:52+02:00 */

/**
* IP:          90.146.54.62
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class CoreShopProductSpecificPrice extends Object\Fieldcollection\Data\AbstractData  {

public $type = "CoreShopProductSpecificPrice";
public $customers;
public $currencies;
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
* Get currencies - Currency
* @return array
*/
public function getCurrencies () {
	$data = $this->currencies;
	 return $data;
}

/**
* Get currencies - Currency
* @param array $currencies
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setCurrencies ($currencies) {
	$this->currencies = $currencies;
	return $this;
}

/**
* Get countries - Countries
* @return array
*/
public function getCountries () {
	$data = $this->countries;
	 return $data;
}

/**
* Get countries - Countries
* @param array $countries
* @return \Pimcore\Model\Object\CoreShopProductSpecificPrice
*/
public function setCountries ($countries) {
	$this->countries = $countries;
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

