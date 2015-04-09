<?php

use Website\Controller\Action;

class DefaultController extends Action
{
    public function init()
    {
        parent::init();
    }

    public function defaultAction()
    {
        $this->_redirect($this->view->url(array("lang" => $this->language), "coreshop_index"));
    }

    public function testAction()
    {
        $payment = \Pimcore\Model\Object\CoreShopPayment::getById(152);
        $order = $payment->getOrder();

        if($order instanceof \Pimcore\Model\Object\CoreShopOrder)
        {
            $user = $order->getCustomer();

            if($user instanceof \CoreShop\Plugin\User)
            {
                $view = new \Pimcore\View();

                $view->setScriptPath(
                    $this->view->getScriptPaths()
                );

                $view->registerHelper(new \Pimcore\View\Helper\Url(), "url");
                $view->language = $this->language;
                $view->order = $order;
                $view->user = $user;
                $view->payment = $payment;

                $mailDocumentPath = "/".$this->language."/shop/email/new-order";
                $mailDocument = \Pimcore\Model\Document::getByPath($mailDocumentPath);

                if($mailDocument instanceof \Pimcore\Model\Document\Email) {
                    $orderDetailsString = $view->render("coreshop/email/helper/order-details.php");
                    $deliveryAddressString = $view->partial("coreshop/email/helper/address.php", array("address" => $user->findAddressByName($order->getDeliveryAddress())));
                    $billingAddressString =  $view->partial("coreshop/email/helper/address.php", array("address" => $user->findAddressByName($order->getBillingAddress())));

                    $params = array(
                        'gender' => $user->getGender(),
                        'firstname' => $user->getFirstname(),
                        'lastname' => $user->getLastname(),
                        'email' => $user->getEmail(),
                        'object' => $user,
                        'token' => $user->getProperty("token"),
                        'language' => $this->language,
                        'orderDetails' => $orderDetailsString,
                        'deliveryAddress' => $deliveryAddressString,
                        'billingAddress' => $billingAddressString
                    );

                    $mail = new \Pimcore\Mail();
                    $mail->addTo($user->getEmail());
                    $mail->setDocument($mailDocument);
                    $mail->setParams($params);
                    echo $mail->getBodyHtmlRendered();exit;
                    $mail->send();
                } else {
                    \Logger::error("Mail Document for new Order in $mailDocumentPath not found");
                }
            }
        }

        exit;
    }
}
