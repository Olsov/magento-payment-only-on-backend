<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mteam\Businesscus\Observer;

use Magento\Framework\Event\ObserverInterface;
use Mteam\Businesscus\Model\Businesscus;

class BeforeOrderPaymentSaveObserver implements ObserverInterface
{
    /**
     * Sets current instructions for bank transfer account
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order\Payment $payment */
        
        $order = $observer->getEvent()->getOrder();
        $payment = $order->getPayment()->getMethodInstance();
        // Check code payment method
        if ($payment->getCode() == 'businesscus') {
  
            $payment->setAdditionalInformation('instructions',$payment->getInstructions());
             $payment->setAdditionalInformation($payment->getInstructions());
            $payment->setAdditionalInformation(
                'instructions',
                $payment->getInstructions()
            );
    

        }

    }
}
