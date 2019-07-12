<?php

namespace Mteam\Businesscus\Plugin;

class QuotePaymentPlugin
{
    /**
     * @param \Magento\Quote\Model\Quote\Payment $subject
     * @param array $data
     * @return array
     */
    public function beforeImportData(\Magento\Quote\Model\Quote\Payment $subject, array $data)
    {
        if (array_key_exists('instructions', $data)) {
            $subject->setAdditionalInformation($data['instructions']);
        }

        return [$data];
    }
}