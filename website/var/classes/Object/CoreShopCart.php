<?php 

/** Generated at 2015-03-28T14:44:59+01:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          90.146.27.192
*/


namespace Pimcore\Model\Object;



class CoreShopCart extends \CoreShop\Cart {

public $o_classId = 27;
public $o_className = "CoreShopCart";
public $user;
public $items;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopCart
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get user - user
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getUser () {
	$preValue = $this->preGetValue("user"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("user")->preGetData($this);
	return $data;
}

/**
* Set user - user
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $user
* @return \Pimcore\Model\Object\CoreShopCart
*/
public function setUser ($user) {
	$this->user = $this->getClass()->getFieldDefinition("user")->preSetData($this, $user);
	return $this;
}

/**
* Get items - Items
* @return array
*/
public function getItems () {
	$preValue = $this->preGetValue("items"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);
	return $data;
}

/**
* Set items - Items
* @param array $items
* @return \Pimcore\Model\Object\CoreShopCart
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

protected static $_relationFields = array (
  'user' => 
  array (
    'type' => 'href',
  ),
  'items' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}

