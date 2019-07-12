<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mteam\Businesscus\Model;

/**
 * Businesscus payment method model
 *
 * @method \Magento\Quote\Api\Data\PaymentMethodExtensionInterface getExtensionAttributes()
 *
 * @api
 * @since 100.0.2
 */
class Businesscus extends \Magento\Payment\Model\Method\AbstractMethod
{
    const CODE = 'businesscus';

    /**
     * @var string
     */
    protected $_code            = self::CODE;

    /**
     * @var bool
     */
    protected $_isOffline       = true;

    /**
     * @var bool
     */
    //protected $_canUseCheckout  = false;

    /**
     * @var bool
     */
    protected $_canUseInternal  = true;
        /**
     * Bank Transfer payment block paths
     *
     * @var string
     */
    protected $_formBlockType = \Mteam\Businesscus\Block\Form\Businesscus::class;

    /**
     * Instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = \Magento\Payment\Block\Info\Instructions::class;
    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}
