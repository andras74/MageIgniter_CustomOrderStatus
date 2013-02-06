<?php

class MageIgniter_CustomOrderStatus_Model_Observer {

    public function saveCustomData($event) {
	Mage::helper('firephp')->debug('saveCustomData()');
	Mage::log('saveCustomData()');

	$quote = $event->getSession()->getQuote();
	$quote->setData('my_custom_input_field', $event->getRequestModel()->getPost('my_custom_input_field'));

	return $this;
    }

}