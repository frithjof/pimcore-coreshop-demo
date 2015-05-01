<?php 

/** Generated at 2015-05-01T15:08:25+02:00 */

/**
* IP:          90.146.54.62
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class CoreShopUserAddress extends Object\Fieldcollection\Data\AbstractData  {

public $type = "CoreShopUserAddress";
public $firstname;
public $lastname;
public $company;
public $street;
public $nr;
public $zip;
public $city;
public $extra;
public $phone;
public $phone_mobile;
public $name;
public $image;
public $country;


/**
* Get firstname - Vorname
* @return string
*/
public function getFirstname () {
	$data = $this->firstname;
	 return $data;
}

/**
* Get firstname - Vorname
* @param string $firstname
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setFirstname ($firstname) {
	$this->firstname = $firstname;
	return $this;
}

/**
* Get lastname - Nachname
* @return string
*/
public function getLastname () {
	$data = $this->lastname;
	 return $data;
}

/**
* Get lastname - Nachname
* @param string $lastname
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
	return $this;
}

/**
* Get company - Firma
* @return string
*/
public function getCompany () {
	$data = $this->company;
	 return $data;
}

/**
* Get company - Firma
* @param string $company
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setCompany ($company) {
	$this->company = $company;
	return $this;
}

/**
* Get street - Straße
* @return string
*/
public function getStreet () {
	$data = $this->street;
	 return $data;
}

/**
* Get street - Straße
* @param string $street
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setStreet ($street) {
	$this->street = $street;
	return $this;
}

/**
* Get nr - Hausnummer
* @return string
*/
public function getNr () {
	$data = $this->nr;
	 return $data;
}

/**
* Get nr - Hausnummer
* @param string $nr
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setNr ($nr) {
	$this->nr = $nr;
	return $this;
}

/**
* Get zip - PLZ
* @return string
*/
public function getZip () {
	$data = $this->zip;
	 return $data;
}

/**
* Get zip - PLZ
* @param string $zip
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setZip ($zip) {
	$this->zip = $zip;
	return $this;
}

/**
* Get city - Stadt
* @return string
*/
public function getCity () {
	$data = $this->city;
	 return $data;
}

/**
* Get city - Stadt
* @param string $city
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setCity ($city) {
	$this->city = $city;
	return $this;
}

/**
* Get extra - Weitere Informationen
* @return string
*/
public function getExtra () {
	$data = $this->extra;
	 return $data;
}

/**
* Get extra - Weitere Informationen
* @param string $extra
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setExtra ($extra) {
	$this->extra = $extra;
	return $this;
}

/**
* Get phone - Festnetz
* @return string
*/
public function getPhone () {
	$data = $this->phone;
	 return $data;
}

/**
* Get phone - Festnetz
* @param string $phone
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setPhone ($phone) {
	$this->phone = $phone;
	return $this;
}

/**
* Get phone_mobile - Mobiltelefon
* @return string
*/
public function getPhone_mobile () {
	$data = $this->phone_mobile;
	 return $data;
}

/**
* Get phone_mobile - Mobiltelefon
* @param string $phone_mobile
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setPhone_mobile ($phone_mobile) {
	$this->phone_mobile = $phone_mobile;
	return $this;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Get name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get image - image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$data = $this->image;
	 return $data;
}

/**
* Get image - image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

/**
* Get country - Country
* @return string
*/
public function getCountry () {
	$data = $this->country;
	 return $data;
}

/**
* Get country - Country
* @param string $country
* @return \Pimcore\Model\Object\CoreShopUserAddress
*/
public function setCountry ($country) {
	$this->country = $country;
	return $this;
}

}

