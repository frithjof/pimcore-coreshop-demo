<?php 

/** Generated at 2015-04-24T12:07:45+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object;



class CoreShopCurrency extends \CoreShop\Model\CurrencyModel {

public $o_classId = 35;
public $o_className = "CoreShopCurrency";
public $name;
public $isoCode;
public $isoNumber;
public $symbol;
public $exchangeRate;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCurrency
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
* @return \Pimcore\Model\Object\CoreShopCurrency
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get isoCode - ISO Code
* @return string
*/
public function getIsoCode () {
	$preValue = $this->preGetValue("isoCode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isoCode;
	return $data;
}

/**
* Set isoCode - ISO Code
* @param string $isoCode
* @return \Pimcore\Model\Object\CoreShopCurrency
*/
public function setIsoCode ($isoCode) {
	$this->isoCode = $isoCode;
	return $this;
}

/**
* Get isoNumber - Numeric ISO Code
* @return string
*/
public function getIsoNumber () {
	$preValue = $this->preGetValue("isoNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isoNumber;
	return $data;
}

/**
* Set isoNumber - Numeric ISO Code
* @param string $isoNumber
* @return \Pimcore\Model\Object\CoreShopCurrency
*/
public function setIsoNumber ($isoNumber) {
	$this->isoNumber = $isoNumber;
	return $this;
}

/**
* Get symbol - Symbol
* @return string
*/
public function getSymbol () {
	$preValue = $this->preGetValue("symbol"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->symbol;
	return $data;
}

/**
* Set symbol - Symbol
* @param string $symbol
* @return \Pimcore\Model\Object\CoreShopCurrency
*/
public function setSymbol ($symbol) {
	$this->symbol = $symbol;
	return $this;
}

/**
* Get exchangeRate - Exchange Rate
* @return float
*/
public function getExchangeRate () {
	$preValue = $this->preGetValue("exchangeRate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->exchangeRate;
	return $data;
}

/**
* Set exchangeRate - Exchange Rate
* @param float $exchangeRate
* @return \Pimcore\Model\Object\CoreShopCurrency
*/
public function setExchangeRate ($exchangeRate) {
	$this->exchangeRate = $exchangeRate;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

