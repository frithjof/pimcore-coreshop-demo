<?php 

/** Generated at 2015-03-31T10:35:31+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          178.189.232.59
*/


namespace Pimcore\Model\Object;



class CoreShopCategory extends \CoreShop\Category {

public $o_classId = 25;
public $o_className = "CoreShopCategory";
public $parentCategory;
public $localizedfields;
public $image;
public $metaTitle;
public $metaDescription;
public $metaKeywords;
public $friendlyUrl;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get parentCategory - Parent Category
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getParentCategory () {
	$preValue = $this->preGetValue("parentCategory"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("parentCategory")->preGetData($this);
	return $data;
}

/**
* Set parentCategory - Parent Category
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $parentCategory
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setParentCategory ($parentCategory) {
	$this->parentCategory = $this->getClass()->getFieldDefinition("parentCategory")->preSetData($this, $parentCategory);
	return $this;
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
* Get description - Description
* @return string
*/
public function getDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set localizedfields - 
* @param array $localizedfields
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set description - Description
* @param string $description
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setDescription ($description, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language);
	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$preValue = $this->preGetValue("image"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->image;
	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

/**
* Get metaTitle - Title
* @return string
*/
public function getMetaTitle () {
	$preValue = $this->preGetValue("metaTitle"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->metaTitle;
	return $data;
}

/**
* Set metaTitle - Title
* @param string $metaTitle
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaTitle ($metaTitle) {
	$this->metaTitle = $metaTitle;
	return $this;
}

/**
* Get metaDescription - Description
* @return string
*/
public function getMetaDescription () {
	$preValue = $this->preGetValue("metaDescription"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->metaDescription;
	return $data;
}

/**
* Set metaDescription - Description
* @param string $metaDescription
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaDescription ($metaDescription) {
	$this->metaDescription = $metaDescription;
	return $this;
}

/**
* Get metaKeywords - Keywords
* @return string
*/
public function getMetaKeywords () {
	$preValue = $this->preGetValue("metaKeywords"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->metaKeywords;
	return $data;
}

/**
* Set metaKeywords - Keywords
* @param string $metaKeywords
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaKeywords ($metaKeywords) {
	$this->metaKeywords = $metaKeywords;
	return $this;
}

/**
* Get friendlyUrl - Friendly URL
* @return string
*/
public function getFriendlyUrl () {
	$preValue = $this->preGetValue("friendlyUrl"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->friendlyUrl;
	return $data;
}

/**
* Set friendlyUrl - Friendly URL
* @param string $friendlyUrl
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setFriendlyUrl ($friendlyUrl) {
	$this->friendlyUrl = $friendlyUrl;
	return $this;
}

protected static $_relationFields = array (
  'parentCategory' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

