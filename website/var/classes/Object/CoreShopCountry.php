<?php 

/** Generated at 2015-04-25T13:49:18+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopCountry extends \CoreShop\Model\CountryModel {

public $o_classId = 34;
public $o_className = "CoreShopCountry";
public $country;
public $active;
public $currency;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCountry
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get country - Country
* @return string
*/
public function getCountry () {
	$preValue = $this->preGetValue("country"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->country;
	return $data;
}

/**
* Set country - Country
* @param string $country
* @return \Pimcore\Model\Object\CoreShopCountry
*/
public function setCountry ($country) {
	$this->country = $country;
	return $this;
}

/**
* Get active - Aktiv
* @return boolean
*/
public function getActive () {
	$preValue = $this->preGetValue("active"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->active;
	return $data;
}

/**
* Set active - Aktiv
* @param boolean $active
* @return \Pimcore\Model\Object\CoreShopCountry
*/
public function setActive ($active) {
	$this->active = $active;
	return $this;
}

/**
* Get currency - Currency
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getCurrency () {
	$preValue = $this->preGetValue("currency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("currency")->preGetData($this);
	return $data;
}

/**
* Set currency - Currency
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $currency
* @return \Pimcore\Model\Object\CoreShopCountry
*/
public function setCurrency ($currency) {
	$this->currency = $this->getClass()->getFieldDefinition("currency")->preSetData($this, $currency);
	return $this;
}

protected static $_relationFields = array (
  'currency' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

