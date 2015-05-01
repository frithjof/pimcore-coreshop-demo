<?php 

/** Generated at 2015-04-20T14:51:01+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object;



class CoreShopCategory extends \CoreShop\Model\Category {

public $o_classId = 25;
public $o_className = "CoreShopCategory";
public $parentCategory;
public $localizedfields;
public $categoryImage;


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
* Get metaTitle - Title
* @return string
*/
public function getMetaTitle ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("metaTitle", $language);
	$preValue = $this->preGetValue("metaTitle"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get metaDescription - Description
* @return string
*/
public function getMetaDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("metaDescription", $language);
	$preValue = $this->preGetValue("metaDescription"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get metaKeywords - Keywords
* @return string
*/
public function getMetaKeywords ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("metaKeywords", $language);
	$preValue = $this->preGetValue("metaKeywords"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get friendlyUrl - Friendly URL
* @return string
*/
public function getFriendlyUrl ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("friendlyUrl", $language);
	$preValue = $this->preGetValue("friendlyUrl"); 
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
* Set metaTitle - Title
* @param string $metaTitle
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaTitle ($metaTitle, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("metaTitle", $metaTitle, $language);
	return $this;
}

/**
* Set metaDescription - Description
* @param string $metaDescription
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaDescription ($metaDescription, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("metaDescription", $metaDescription, $language);
	return $this;
}

/**
* Set metaKeywords - Keywords
* @param string $metaKeywords
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setMetaKeywords ($metaKeywords, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("metaKeywords", $metaKeywords, $language);
	return $this;
}

/**
* Set friendlyUrl - Friendly URL
* @param string $friendlyUrl
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setFriendlyUrl ($friendlyUrl, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("friendlyUrl", $friendlyUrl, $language);
	return $this;
}

/**
* Get categoryImage - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getCategoryImage () {
	$preValue = $this->preGetValue("categoryImage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->categoryImage;
	return $data;
}

/**
* Set categoryImage - Image
* @param \Pimcore\Model\Asset\Image $categoryImage
* @return \Pimcore\Model\Object\CoreShopCategory
*/
public function setCategoryImage ($categoryImage) {
	$this->categoryImage = $categoryImage;
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

