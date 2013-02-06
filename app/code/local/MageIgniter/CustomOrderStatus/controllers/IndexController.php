<?php

class MageIgniter_CustomOrderStatus_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {

	Mage::helper('firephp')->debug('indexAction()');
	Mage::log('indexAction()');

	echo ' working ' . '<br/>';
    }

}

?>