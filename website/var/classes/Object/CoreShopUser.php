<?php 

/** Generated at 2015-03-31T21:35:40+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopUser extends \CoreShop\Model\User\UserAbstract {

public $o_classId = 29;
public $o_className = "CoreShopUser";
public $firstname;
public $lastname;
public $gender;
public $email;
public $password;
public $addresses;
public $newsletterActive;
public $newsletterConfirmed;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopUser
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get firstname - firstname
* @return string
*/
public function getFirstname () {
	$preValue = $this->preGetValue("firstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->firstname;
	return $data;
}

/**
* Set firstname - firstname
* @param string $firstname
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setFirstname ($firstname) {
	$this->firstname = $firstname;
	return $this;
}

/**
* Get lastname - lastname
* @return string
*/
public function getLastname () {
	$preValue = $this->preGetValue("lastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lastname;
	return $data;
}

/**
* Set lastname - lastname
* @param string $lastname
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
	return $this;
}

/**
* Get gender - Gender
* @return string
*/
public function getGender () {
	$preValue = $this->preGetValue("gender"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gender;
	return $data;
}

/**
* Set gender - Gender
* @param string $gender
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setGender ($gender) {
	$this->gender = $gender;
	return $this;
}

/**
* Get email - email
* @return string
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
* Set email - email
* @param string $email
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

/**
* Get password - password
* @return string
*/
public function getPassword () {
	$preValue = $this->preGetValue("password"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->password;
	return $data;
}

/**
* Set password - password
* @param string $password
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setPassword ($password) {
	$this->password = $password;
	return $this;
}

/**
* @return \Object\Fieldcollection
*/
public function getAddresses () {
	$preValue = $this->preGetValue("addresses"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("addresses")->preGetData($this);
	 return $data;
}

/**
* Set addresses - addresses
* @param \Object\Fieldcollection $addresses
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setAddresses ($addresses) {
	$this->addresses = $this->getClass()->getFieldDefinition("addresses")->preSetData($this, $addresses);
	return $this;
}

/**
* Get newsletterActive - Newsletter Active
* @return boolean
*/
public function getNewsletterActive () {
	$preValue = $this->preGetValue("newsletterActive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterActive;
	return $data;
}

/**
* Set newsletterActive - Newsletter Active
* @param boolean $newsletterActive
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setNewsletterActive ($newsletterActive) {
	$this->newsletterActive = $newsletterActive;
	return $this;
}

/**
* Get newsletterConfirmed - Newsletter Confirmed
* @return boolean
*/
public function getNewsletterConfirmed () {
	$preValue = $this->preGetValue("newsletterConfirmed"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterConfirmed;
	return $data;
}

/**
* Set newsletterConfirmed - Newsletter Confirmed
* @param boolean $newsletterConfirmed
* @return \Pimcore\Model\Object\CoreShopUser
*/
public function setNewsletterConfirmed ($newsletterConfirmed) {
	$this->newsletterConfirmed = $newsletterConfirmed;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

