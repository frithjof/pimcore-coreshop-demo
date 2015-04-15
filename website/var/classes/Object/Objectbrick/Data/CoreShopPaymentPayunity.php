<?php 

/** Generated at 2015-04-03T13:36:26+02:00 */

/**
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class CoreShopPaymentPayunity extends Object\Objectbrick\Data\AbstractData  {

public $type = "CoreShopPaymentPayunity";
public $identificationUniqeId;
public $identificationShortId;


/**
* Set identificationUniqeId - identificationUniqeId
* @return string
*/
public function getIdentificationUniqeId () {
	$data = $this->identificationUniqeId;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("identificationUniqeId")->isEmpty($data)) {
		return $this->getValueFromParent("identificationUniqeId");
	}
	 return $data;
}

/**
* Set identificationUniqeId - identificationUniqeId
* @param string $identificationUniqeId
* @return \Pimcore\Model\Object\CoreShopPaymentPayunity
*/
public function setIdentificationUniqeId ($identificationUniqeId) {
	$this->identificationUniqeId = $identificationUniqeId;
	return $this;
}

/**
* Set identificationShortId - IdentificationShortId
* @return string
*/
public function getIdentificationShortId () {
	$data = $this->identificationShortId;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("identificationShortId")->isEmpty($data)) {
		return $this->getValueFromParent("identificationShortId");
	}
	 return $data;
}

/**
* Set identificationShortId - IdentificationShortId
* @param string $identificationShortId
* @return \Pimcore\Model\Object\CoreShopPaymentPayunity
*/
public function setIdentificationShortId ($identificationShortId) {
	$this->identificationShortId = $identificationShortId;
	return $this;
}

}

