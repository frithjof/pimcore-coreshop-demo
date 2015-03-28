<?php

class DefaultController extends Website_Controller_Project
{
    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $this->view->layout = "home";
    }
    
    public function defaultAction()
    {
        //Sentry::message("user init called", array("user" => "test"));
        //Sentry::exception(new Exception("test"), array("user" => "usertotest"));
        
        Log::warn("User not allowed to access Profile");
    }
    
    public function paymentAction()
    {
        $Sofortueberweisung = new Sofortueberweisung_Payment("100017:206032:7f69b0c929ce409cefe42052e478d8f8");

        $Sofortueberweisung->setAmount(10.21);
        $Sofortueberweisung->setCurrencyCode('EUR');
        $Sofortueberweisung->setSenderSepaAccount('88888888', '12345678', 'Max Mustermann');
        $Sofortueberweisung->setSenderCountryCode('DE');
        $Sofortueberweisung->setReason('Testueberweisung', 'Verwendungszweck');
        $Sofortueberweisung->setSuccessUrl('http://pimcore.lineofcode.at/?controller=default&action=payment-return', true);
        $Sofortueberweisung->setAbortUrl('http://pimcore.lineofcode.at/?controller=default&action=payment-return&abort=true');

        // $Sofortueberweisung->setNotificationUrl('http://www.google.de', 'loss,pending');
        // $Sofortueberweisung->setNotificationUrl('http://www.yahoo.com', 'loss');
        // $Sofortueberweisung->setNotificationUrl('http://www.bing.com', 'pending');
        // $Sofortueberweisung->setNotificationUrl('http://www.sofort.com', 'received');
        // $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'refunded');
        // $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'untraceable');
        $Sofortueberweisung->setAbortUrl('http://pimcore.lineofcode.at/?controller=default&action=payment-return&notification=true');
        $Sofortueberweisung->setCustomerprotection(true);
        
        $Sofortueberweisung->sendRequest();

        if ($Sofortueberweisung->isError()) {
            echo $Sofortueberweisung->getError();
        } else {
            $paymentUrl = $Sofortueberweisung->getPaymentUrl();
            $this->_redirect($paymentUrl);
        }
        
        exit;
    }
    
    public function paymentPayPalAction()
    {
        $paypal = new PayPal_Payment('AfaaRRDqaQ7UjtyaH9bHUyDGVCGcofvrvoGp0C5B1a570PySVf-jrO3ejvHY', 'ENCxXxALNiOxXJxeyhiYaNN6DXT6JC1EYfHy9ysI_8tJiaVHFHJrka3odwAr');

        $paypal->setCurrency("EUR");
        $paypal->addItem("Test", "EUR", 1, 10.99);
        $paypal->setShipping(1);
        $paypal->setTax((10.99+1) * 0.2);
        $paypal->setDescription("test Transaction");
        $paypal->setReturnUrl("http://template.dev.192.168.1.102.xip.io?controller=default&action=payment-return-paypal");
        $paypal->setCancelUrl("http://template.dev.192.168.1.102.xip.io?controller=default&action=payment-return-paypal");
        
        $paypal->sendRequest();
        
        if ($paypal->isError()) {
            echo $paypal->getError();
        } else {
            $paymentUrl = $paypal->getPaymentUrl();
            $this->_redirect($paymentUrl);
        }
        
        exit;
    }
    
    public function paymentReturnAction()
    {
        echo "<pre>";
        print_r($this->getAllParams());
        exit;
    }
}
