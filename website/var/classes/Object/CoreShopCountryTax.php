<?php 

/** Generated at 2015-04-18T09:08:15+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          62.46.68.94
*/


namespace Pimcore\Model\Object;



class CoreShopCountryTax extends Concrete {

public $o_classId = 33;
public $o_className = "CoreShopCountryTax";
public $localizedfields;
public $country;
public $taxRate;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCountryTax
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return array
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set localizedfields - 
* @param array $localizedfields
* @return \Pimcore\Model\Object\CoreShopCountryTax
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopCountryTax
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Get country - Country
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getCountry () {
	$preValue = $this->preGetValue("country"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("country")->preGetData($this);
	return $data;
}

/**
* Set country - Country
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $country
* @return \Pimcore\Model\Object\CoreShopCountryTax
*/
public function setCountry ($country) {
	$this->country = $this->getClass()->getFieldDefinition("country")->preSetData($this, $country);
	return $this;
}

/**
* Get taxRate - taxRate
* @return float
*/
public function getTaxRate () {
	$preValue = $this->preGetValue("taxRate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taxRate;
	return $data;
}

/**
* Set taxRate - taxRate
* @param float $taxRate
* @return \Pimcore\Model\Object\CoreShopCountryTax
*/
public function setTaxRate ($taxRate) {
	$this->taxRate = $taxRate;
	return $this;
}

protected static $_relationFields = array (
  'country' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

