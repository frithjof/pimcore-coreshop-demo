<?php 

/** Generated at 2015-04-09T16:05:18+02:00 */

/**
* Inheritance: yes
* Variants   : yes
* Changed by : admin (2)
* IP:          178.115.129.98
*/


namespace Pimcore\Model\Object;



class CoreShopProduct extends \CoreShop\Model\Product {

public $o_classId = 26;
public $o_className = "CoreShopProduct";
public $localizedfields;
public $ean;
public $enabled;
public $availableForOrder;
public $isDownloadProduct;
public $categories;
public $wholesalePrice;
public $retailPrice;
public $tax;
public $price;
public $specificPrice;
public $length;
public $width;
public $height;
public $weight;
public $images;
public $dimensions;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopProduct
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
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		return $this->getValueFromParent("localizedfields");
	}
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
* Get shortDescription - Short Description
* @return string
*/
public function getShortDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("shortDescription", $language);
	$preValue = $this->preGetValue("shortDescription"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get description - description
* @return string
*/
public function getDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get metaTitle - Meta Title
* @return string
*/
public function getMetaTitle ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("metaTitle", $language);
	$preValue = $this->preGetValue("metaTitle"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get metaDescription - Meta Description
* @return string
*/
public function getMetaDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("metaDescription", $language);
	$preValue = $this->preGetValue("metaDescription"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Get friendlyUrl - URL
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
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set shortDescription - Short Description
* @param string $shortDescription
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setShortDescription ($shortDescription, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("shortDescription", $shortDescription, $language);
	return $this;
}

/**
* Set description - description
* @param string $description
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setDescription ($description, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language);
	return $this;
}

/**
* Set metaTitle - Meta Title
* @param string $metaTitle
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setMetaTitle ($metaTitle, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("metaTitle", $metaTitle, $language);
	return $this;
}

/**
* Set metaDescription - Meta Description
* @param string $metaDescription
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setMetaDescription ($metaDescription, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("metaDescription", $metaDescription, $language);
	return $this;
}

/**
* Set friendlyUrl - URL
* @param string $friendlyUrl
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setFriendlyUrl ($friendlyUrl, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("friendlyUrl", $friendlyUrl, $language);
	return $this;
}

/**
* Get ean - EAN
* @return string
*/
public function getEan () {
	$preValue = $this->preGetValue("ean"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ean;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ean")->isEmpty($data)) {
		return $this->getValueFromParent("ean");
	}
	return $data;
}

/**
* Set ean - EAN
* @param string $ean
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setEan ($ean) {
	$this->ean = $ean;
	return $this;
}

/**
* Get enabled - Enabled
* @return boolean
*/
public function getEnabled () {
	$preValue = $this->preGetValue("enabled"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->enabled;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("enabled")->isEmpty($data)) {
		return $this->getValueFromParent("enabled");
	}
	return $data;
}

/**
* Set enabled - Enabled
* @param boolean $enabled
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setEnabled ($enabled) {
	$this->enabled = $enabled;
	return $this;
}

/**
* Get availableForOrder - Available for Order
* @return boolean
*/
public function getAvailableForOrder () {
	$preValue = $this->preGetValue("availableForOrder"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->availableForOrder;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("availableForOrder")->isEmpty($data)) {
		return $this->getValueFromParent("availableForOrder");
	}
	return $data;
}

/**
* Set availableForOrder - Available for Order
* @param boolean $availableForOrder
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setAvailableForOrder ($availableForOrder) {
	$this->availableForOrder = $availableForOrder;
	return $this;
}

/**
* Get isDownloadProduct - isDownloadProduct
* @return boolean
*/
public function getIsDownloadProduct () {
	$preValue = $this->preGetValue("isDownloadProduct"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->isDownloadProduct;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("isDownloadProduct")->isEmpty($data)) {
		return $this->getValueFromParent("isDownloadProduct");
	}
	return $data;
}

/**
* Set isDownloadProduct - isDownloadProduct
* @param boolean $isDownloadProduct
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setIsDownloadProduct ($isDownloadProduct) {
	$this->isDownloadProduct = $isDownloadProduct;
	return $this;
}

/**
* Get categories - Categories
* @return array
*/
public function getCategories () {
	$preValue = $this->preGetValue("categories"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("categories")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("categories")->isEmpty($data)) {
		return $this->getValueFromParent("categories");
	}
	return $data;
}

/**
* Set categories - Categories
* @param array $categories
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setCategories ($categories) {
	$this->categories = $this->getClass()->getFieldDefinition("categories")->preSetData($this, $categories);
	return $this;
}

/**
* Get wholesalePrice - Pre-tax wholesale price
* @return float
*/
public function getWholesalePrice () {
	$preValue = $this->preGetValue("wholesalePrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->wholesalePrice;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("wholesalePrice")->isEmpty($data)) {
		return $this->getValueFromParent("wholesalePrice");
	}
	return $data;
}

/**
* Set wholesalePrice - Pre-tax wholesale price
* @param float $wholesalePrice
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setWholesalePrice ($wholesalePrice) {
	$this->wholesalePrice = $wholesalePrice;
	return $this;
}

/**
* Get retailPrice - Pre-tax retail price
* @return float
*/
public function getRetailPrice () {
	$preValue = $this->preGetValue("retailPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->retailPrice;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("retailPrice")->isEmpty($data)) {
		return $this->getValueFromParent("retailPrice");
	}
	return $data;
}

/**
* Set retailPrice - Pre-tax retail price
* @param float $retailPrice
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setRetailPrice ($retailPrice) {
	$this->retailPrice = $retailPrice;
	return $this;
}

/**
* Get tax - Tax
* @return float
*/
public function getTax () {
	$preValue = $this->preGetValue("tax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tax;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("tax")->isEmpty($data)) {
		return $this->getValueFromParent("tax");
	}
	return $data;
}

/**
* Set tax - Tax
* @param float $tax
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setTax ($tax) {
	$this->tax = $tax;
	return $this;
}

/**
* Get price - Retail Price with Tax
* @return float
*/
public function getPrice () {
	$preValue = $this->preGetValue("price"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("price")->isEmpty($data)) {
		return $this->getValueFromParent("price");
	}
	return $data;
}

/**
* Set price - Retail Price with Tax
* @param float $price
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setPrice ($price) {
	$this->price = $price;
	return $this;
}

/**
* @return \Object\Fieldcollection
*/
public function getSpecificPrice () {
	$preValue = $this->preGetValue("specificPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("specificPrice")->preGetData($this);
	 return $data;
}

/**
* Set specificPrice - Specific Price
* @param \Object\Fieldcollection $specificPrice
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setSpecificPrice ($specificPrice) {
	$this->specificPrice = $this->getClass()->getFieldDefinition("specificPrice")->preSetData($this, $specificPrice);
	return $this;
}

/**
* Get length - Länge
* @return float
*/
public function getLength () {
	$preValue = $this->preGetValue("length"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->length;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("length")->isEmpty($data)) {
		return $this->getValueFromParent("length");
	}
	return $data;
}

/**
* Set length - Länge
* @param float $length
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setLength ($length) {
	$this->length = $length;
	return $this;
}

/**
* Get width - Breite
* @return float
*/
public function getWidth () {
	$preValue = $this->preGetValue("width"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->width;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("width")->isEmpty($data)) {
		return $this->getValueFromParent("width");
	}
	return $data;
}

/**
* Set width - Breite
* @param float $width
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Get height - Höhe
* @return float
*/
public function getHeight () {
	$preValue = $this->preGetValue("height"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->height;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("height")->isEmpty($data)) {
		return $this->getValueFromParent("height");
	}
	return $data;
}

/**
* Set height - Höhe
* @param float $height
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setHeight ($height) {
	$this->height = $height;
	return $this;
}

/**
* Get weight - Gewicht
* @return float
*/
public function getWeight () {
	$preValue = $this->preGetValue("weight"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->weight;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	return $data;
}

/**
* Set weight - Gewicht
* @param float $weight
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get images - Images
* @return array
*/
public function getImages () {
	$preValue = $this->preGetValue("images"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("images")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("images")->isEmpty($data)) {
		return $this->getValueFromParent("images");
	}
	return $data;
}

/**
* Set images - Images
* @param array $images
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setImages ($images) {
	$this->images = $this->getClass()->getFieldDefinition("images")->preSetData($this, $images);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getDimensions () {
	$data = $this->dimensions;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\Pimcore\Model\Object\CoreShopProduct\Dimensions")) { 
			$data = new \Pimcore\Model\Object\CoreShopProduct\Dimensions($this, "dimensions");
			$this->dimensions = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("dimensions"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set dimensions - Dimensionen
* @param \Pimcore\Model\Object\Objectbrick $dimensions
* @return \Pimcore\Model\Object\CoreShopProduct
*/
public function setDimensions ($dimensions) {
	$this->dimensions = $this->getClass()->getFieldDefinition("dimensions")->preSetData($this, $dimensions);
	return $this;
}

protected static $_relationFields = array (
  'categories' => 
  array (
    'type' => 'objects',
  ),
  'images' => 
  array (
    'type' => 'multihref',
  ),
);

public $lazyLoadedFields = NULL;

}

