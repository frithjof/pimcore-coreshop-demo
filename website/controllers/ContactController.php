<?php

class ContactController extends Website_Controller_Project
{
    public function init()
    {
        parent::init();
    }

    public function contactAction()
    {
        $formbuilder = new Website_Formbuilder();
        $form = $formbuilder->getForm("contact", $this->language);

        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {
            try {
                $data = array();

                foreach ($form->getElements() as $element) {
                    if ($element instanceof Zend_Form_Element_Submit) {
                        continue;
                    }

                    $data[$element->getLabel()] = $element->getValue();
                }

                $email_document = $this->view->document->getProperty("email_contact");
                $mail = new Pimcore_Mail();
                $mail->setDocument($email_document);
                $mail->setParams(array("data" => $data));
                $mail->send();
                $this->_redirect($this->view->document->getProperty("successpage")->getFullPath());
            } catch (Exception $e) {
                print $e;
            }
        }

        $this->view->partialArray =  array(
                array(
                    "view" => "contact/contactForm.php",
                    "params" => array('form' => $form)
                )
            );

        $this->render('form');
    }
}
