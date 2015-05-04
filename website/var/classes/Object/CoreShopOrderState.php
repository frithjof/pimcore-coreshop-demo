<?php 

/** Generated at 2015-05-04T19:19:56+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopOrderState extends Concrete {

public $o_classId = 37;
public $o_className = "CoreShopOrderState";
public $localizedfields;
public $accepted;
public $shipped;
public $paid;
public $email;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopOrderState
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
* Get emailDocument - Email Document
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getEmailDocument ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("emailDocument", $language);
	$preValue = $this->preGetValue("emailDocument"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set localizedfields - 
* @param array $localizedfields
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set emailDocument - Email Document
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $emailDocument
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setEmailDocument ($emailDocument, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("emailDocument", $emailDocument, $language);
	return $this;
}

/**
* Get accepted - Order has been accepted
* @return boolean
*/
public function getAccepted () {
	$preValue = $this->preGetValue("accepted"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->accepted;
	return $data;
}

/**
* Set accepted - Order has been accepted
* @param boolean $accepted
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setAccepted ($accepted) {
	$this->accepted = $accepted;
	return $this;
}

/**
* Get shipped - Order has been shipped
* @return boolean
*/
public function getShipped () {
	$preValue = $this->preGetValue("shipped"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shipped;
	return $data;
}

/**
* Set shipped - Order has been shipped
* @param boolean $shipped
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setShipped ($shipped) {
	$this->shipped = $shipped;
	return $this;
}

/**
* Get paid - Order has been paid
* @return boolean
*/
public function getPaid () {
	$preValue = $this->preGetValue("paid"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paid;
	return $data;
}

/**
* Set paid - Order has been paid
* @param boolean $paid
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setPaid ($paid) {
	$this->paid = $paid;
	return $this;
}

/**
* Get email - Send E-Mail to Customer
* @return boolean
*/
public function getEmail () {
	$preValue = $this->preGetValue("email"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->email;
	return $data;
}

/**
* Set email - Send E-Mail to Customer
* @param boolean $email
* @return \Pimcore\Model\Object\CoreShopOrderState
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

