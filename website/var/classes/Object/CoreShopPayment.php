<?php 

/** Generated at 2015-04-20T14:50:26+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          81.10.194.170
*/


namespace Pimcore\Model\Object;



class CoreShopPayment extends \CoreShop\Model\Payment {

public $o_classId = 31;
public $o_className = "CoreShopPayment";
public $provider;
public $amount;
public $transactionIdentifier;
public $payed;
public $datePayment;
public $paymentInformation;


/**
* @param array $values
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get provider - Provider
* @return string
*/
public function getProvider () {
	$preValue = $this->preGetValue("provider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->provider;
	return $data;
}

/**
* Set provider - Provider
* @param string $provider
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setProvider ($provider) {
	$this->provider = $provider;
	return $this;
}

/**
* Get amount - Amount
* @return float
*/
public function getAmount () {
	$preValue = $this->preGetValue("amount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->amount;
	return $data;
}

/**
* Set amount - Amount
* @param float $amount
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

/**
* Get transactionIdentifier - transactionIdentifier
* @return string
*/
public function getTransactionIdentifier () {
	$preValue = $this->preGetValue("transactionIdentifier"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->transactionIdentifier;
	return $data;
}

/**
* Set transactionIdentifier - transactionIdentifier
* @param string $transactionIdentifier
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setTransactionIdentifier ($transactionIdentifier) {
	$this->transactionIdentifier = $transactionIdentifier;
	return $this;
}

/**
* Get payed - Payed
* @return boolean
*/
public function getPayed () {
	$preValue = $this->preGetValue("payed"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->payed;
	return $data;
}

/**
* Set payed - Payed
* @param boolean $payed
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setPayed ($payed) {
	$this->payed = $payed;
	return $this;
}

/**
* Get datePayment - datePayment
* @return \Pimcore\Date
*/
public function getDatePayment () {
	$preValue = $this->preGetValue("datePayment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->datePayment;
	return $data;
}

/**
* Set datePayment - datePayment
* @param \Pimcore\Date $datePayment
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setDatePayment ($datePayment) {
	$this->datePayment = $datePayment;
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getPaymentInformation () {
	$data = $this->paymentInformation;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\Pimcore\Model\Object\CoreShopPayment\PaymentInformation")) { 
			$data = new \Pimcore\Model\Object\CoreShopPayment\PaymentInformation($this, "paymentInformation");
			$this->paymentInformation = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("paymentInformation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set paymentInformation - paymentInformation
* @param \Pimcore\Model\Object\Objectbrick $paymentInformation
* @return \Pimcore\Model\Object\CoreShopPayment
*/
public function setPaymentInformation ($paymentInformation) {
	$this->paymentInformation = $this->getClass()->getFieldDefinition("paymentInformation")->preSetData($this, $paymentInformation);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

